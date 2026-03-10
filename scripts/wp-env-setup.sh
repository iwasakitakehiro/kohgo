#!/usr/bin/env bash
set -euo pipefail

# Create pages if missing and configure front page + templates.

create_page_if_missing() {
  local title="$1"
  local slug="$2"

  local existing_id
  existing_id=$(wp-env run cli wp post list --post_type=page --name="$slug" --field=ID)

  if [[ -n "$existing_id" ]]; then
    echo "$existing_id"
    return 0
  fi

  wp-env run cli wp post create \
    --post_type=page \
    --post_title="$title" \
    --post_name="$slug" \
    --post_status=publish \
    --porcelain
}

# Pages to ensure exist (title|slug)
PAGES=(
  "Home|home"
  "Service|service"
  "About|about"
  "Contact|contact"
)

# Template mapping (slug|template)
TEMPLATES=(
  "service|page-service.php"
  "about|page-about.php"
  "contact|page-contact.php"
)

declare -A PAGE_IDS
for entry in "${PAGES[@]}"; do
  title="${entry%%|*}"
  slug="${entry##*|}"
  PAGE_IDS["$slug"]="$(create_page_if_missing "$title" "$slug")"
done

wp-env run cli wp option update show_on_front page
wp-env run cli wp option update page_on_front "${PAGE_IDS[home]}"
wp-env run cli wp option update permalink_structure "/%year%/%monthnum%/%day%/%postname%/"
wp-env run cli wp rewrite flush --hard

for entry in "${TEMPLATES[@]}"; do
  slug="${entry%%|*}"
  template="${entry##*|}"
  wp-env run cli wp post meta update "${PAGE_IDS[$slug]}" _wp_page_template "$template"
done

echo "Setup complete."
for entry in "${PAGES[@]}"; do
  title="${entry%%|*}"
  slug="${entry##*|}"
  echo "${title} ID=${PAGE_IDS[$slug]}"
done
