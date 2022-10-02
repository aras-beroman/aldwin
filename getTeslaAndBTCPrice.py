# create a function that give me the current price of tesla stock
# and the current price of bitcoin

import requests
import json

def getStockPrice(stock):
    url = "https://www.alphavantage.co/query?function=GLOBAL_QUOTE&symbol=" + stock + "&apikey=YOURAPIKEY"
    response = requests.get(url)
    data = response.json()
    return data["Global Quote"]["05. price"]

def getBitcoinPrice():
    url = "https://api.coindesk.com/v1/bpi/currentprice.json"
    response = requests.get(url)
    data = response.json()
    return data["bpi"]["USD"]["rate"]

def main():
    tesla = getStockPrice("TSLA")
    bitcoin = getBitcoinPrice()
    print("Tesla: $" + tesla)
    print("Bitcoin: $" + bitcoin)

if __name__ == "__main__":
    main()

# end of file