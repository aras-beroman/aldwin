# create a chart that shows the popularity of the top 10 programming languages
# in the world.  The chart should be a bar chart with the x-axis being the
# programming language and the y-axis being the popularity.  The popularity
# should be a percentage.  The chart should be saved as a png file.

import requests
import json
import matplotlib.pyplot as plt

def getLanguagePopularity():
    url = "https://api.stackexchange.com/2.2/tags?order=desc&sort=popular&site=stackoverflow"
    response = requests.get(url)
    data = response.json()
    return data["items"]

def main():
    data = getLanguagePopularity()
    languages = []
    popularity = []
    for i in range(10):
        languages.append(data[i]["name"])
        popularity.append(data[i]["count"])
    plt.bar(languages, popularity)
    plt.title("Top 10 Programming Languages")
    plt.xlabel("Programming Language")
    plt.ylabel("Popularity")
    plt.savefig("programmingLanguages.png")

if __name__ == "__main__":
    main()

# end of file


# 

