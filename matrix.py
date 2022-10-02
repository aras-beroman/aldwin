#open chrome browser and go to google.com and search for "python" and click on the first link and print the title of the page and close the browser after 5 seconds

from selenium import webdriver
from selenium.webdriver.common.keys import Keys #to use keys like enter, tab, etc
from selenium.webdriver.common.by import By #to use by class
from selenium.webdriver.support.ui import WebDriverWait #to use wait class
from selenium.webdriver.support import expected_conditions as EC #to use expected_conditions class
import time

PATH = "chromedriver.exe"
driver = webdriver.Chrome(PATH)

driver.get("https://google.com")
print(driver.title)

search = driver.find_element_by_name("q")
search.send_keys("python")
search.send_keys(Keys.RETURN)

try:
    element = WebDriverWait(driver, 10).until(
        EC.presence_of_element_located((By.LINK_TEXT, "Python (programming language) - Wikipedia"))
    )
    element.click()

    print(driver.title)

finally:
    time.sleep(5)
    driver.quit()

#output
#Google
#Python (programming language) - Wikipedia




# import tkinter as tk

# root = tk.Tk()
# root.title("Dushi Lanka Sanka")
# root.box = tk.Message(root, text="Dushi Lanka Sanka", width=200)
# root.protocol("WM_DELETE_WINDOW", lambda: None)
# root.mainloop()

#!/usr/bin/env python3
