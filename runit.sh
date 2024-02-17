url="https://example.com"

# Create a directory to store downloaded images
mkdir -p downloaded_images

# Extract image URLs and download the images
img_array=($(curl -s "$url" | grep -o '<img[^>]*src="[^"]*"' | sed -e 's/<img[^>]*src="//' -e 's/"//'))

for img_url in "${img_array[@]}"; do
    img_filename=$(basename "$img_url")
    curl -s "$img_url" -o "downloaded_images/$img_filename"
    echo "Downloaded: $img_filename"
done

echo "Image scraping and download complete."