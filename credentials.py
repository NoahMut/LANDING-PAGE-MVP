import tkinter as tk

# Gather user ratings
red_rating = float(input("Rate the color Red (1-10): "))
green_rating = float(input("Rate the color Green (1-10): "))
blue_rating = float(input("Rate the color Blue (1-10): "))

# Normalize the ratings
total_rating = red_rating + green_rating + blue_rating
red_proportion = red_rating / total_rating
green_proportion = green_rating / total_rating
blue_proportion = blue_rating / total_rating

# Convert to RGB values (assuming a scale of 0-255)
red = int(red_proportion * 255)
green = int(green_proportion * 255)
blue = int(blue_proportion * 255)

# Create a window to display the color
window = tk.Tk()
window.geometry("200x200")
color_hex = "#{:02X}{:02X}{:02X}".format(red, green, blue)
window.configure(bg=color_hex)

# Run the GUI main loop
window.mainloop()