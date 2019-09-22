import sys
from bs4 import BeautifulSoup
import requests

val=sys.argv[1]
fr=sys.argv[2]
to=sys.argv[3]
val=float(val)
url="https://transferwise.com/in/currency-converter/"+fr+"-to-"+to+"-rate"
result=requests.get(url)
if(result.status_code!=200):
    print("Could not fetch values!")
src=result.content
soup=BeautifulSoup(src,"html.parser")
inputs=soup.find_all("input")
for i in inputs:
    try:
        if(i.attrs["class"]==["js-Rate"]):
            val1=i.attrs["value"]
            break
    except:
        continue
val1=float(val1)
res=val*val1
if(res>10):
    print("%.2f"%res)
elif(res>1):
    print("%.4f"%res)
else:
    print("%.6f"%res)
