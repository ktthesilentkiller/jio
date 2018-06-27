import requests
import json

url = 'http://livetvstream.in/api/jio/play.m3u8'
requests_header = {'User-Agent':'ExoPlayerDemo/5.1.6 (Linux;Android 4.4.2) ExoPlayerLib/2.3.0'}
r = requests.get("http://livetvstream.in/mobile/fifa.php",headers=requests_header)
passid =str((r.cookies['PHPSESSID']))

# Adding empty header as parameters are being sent in payload
headers = {'Host': 'livetvstream.in',
'User-Agent': 'ExoPlayerDemo/5.1.6 (Linux;Android 4.4.2) ExoPlayerLib/2.3.0',
'Accept': 'text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8',
'Accept-Language': 'en-US,en;q=0.5',
'Accept-Encoding': 'gzip, deflate',
'Cookie': 'PHPSESSID='+passid,
'Connection': 'keep-alive',
'Upgrade-Insecure-Requests': '1',
'Cache-Control': 'max-age=0'}
r = requests.post(url,  headers=headers)
print(r.content)

