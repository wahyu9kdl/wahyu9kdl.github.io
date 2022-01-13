#ngapain?
import json,re,random,time,os,sys
from time import sleep
try:
    from bs4 import BeautifulSoup as bs
    import requests
except ImportError:
    print("Installing module")
    os.system(("python" if os.name == "nt" else "python3") + " -m pip install requests bs4")
    exit("Done.\nrun again use: python or python3 run.py")

b="\033[94m"
c="\033[96m"
g="\033[92m"
r="\033[91m"
p="\033[1;97m"
d="\033[00m"
ab="\033[90m"
dn=f"{d}[{g}√{d}]{p}"
er=f"{d}[{r}!{d}]{p}"
pr=f"{d}[{c}?{d}]{p}"
mbasic="https://mbasic.facebook.com{}"
###################awalan#####################
def clear():
    os.system("cls" if os.name == "nt" else "clear")

def baner():
    clear()
    print(f"""
        {p}{b}╔═╗╔╗  {d} ┬  ┬┬┌─┌─┐┌─┐┌─┐┬
        {p}{b}╠╣ ╠╩╗ {d} │  │├┴┐├┤ ├┤ │ ││
        {p}{b}╚  ╚═╝ {d} ┴─┘┴┴ ┴└─┘└  └─┘┴─┘
{ab}-----------------------------------------------
{d}Donate   : {g}https://saweria.co/Awfanspage
{d}Message  : {g}https://wa.me/62......
{d}Restapi  : {g}https://wahyu9kdl.github.io
{d}Youtube  : {g}https://www.youtube.com/watch?v=1D8x2SvHb8w
{d}Github   : {g}https://github.com/wahyu9kdl
{d}Facebook : {g}https://facebook.com/Awgroupchannel
{d}Website  : {g}https://www.alhikmah.my.id
{d}Medium   : {g}https://wahyu9kdl.medium.com
{d}Podcast  : {g}https://open.spotify.com/show/4UoPUn3e0VhJ6MGOwdsrHV

{ab}-----------------------------------------------""")

def agent():
    us={"user-agent":usa,"version":"8.0.2","accept-encoding":"gzip","packagename":"com.datta.liker","device":"true","host":"rajecreation.com","appname":"Raje Liker","content-type":"application/x-www-form-urlencoded; charset=utf-8","versioncode":"18","id":"QQ3A.200605.002","token":"3075dda32ffbbe88"}
    return us

#####################login#######################
def login():
    ua=agent()
    try:
        cokie=open("cookies").read()
    except FileNotFoundError:
        cokie=input(f"{er}Put your cookies\n{pr} {ab}>>> {c}")
    data={"cookie":cokie,"access_token":"","loginType":"FB","refby":"null"}
    req=requests.post(" https://mbasic.facebook.com/r.php?next=https%3A%2F%2Fmbasic.facebook.com%2FAwgroupchannel&cid=104&rs=6&rid=110871494515718&refid=17 ",data=data,headers=ua).text
    if "Login success!" in req:
       with open("cookies","w") as ck:
            ck.write(data["cookie"])
       try:
           lg=ses.get(mbasic.format("/me"),cookies={"cookie":cokie}).text
           lg=bs(lg,"html.parser").find("form",action=lambda x: "/intl/save_locale/?loc=id_ID" in x)
           dt=lg.find_all("input",type="hidden")
           fg=dt[0]["value"]
           jz=dt[1]["value"]
           ses.post(mbasic.format(lg["action"]),data={"fb_dtsg":fg,"jazoest":jz},cookies={"cookie":cokie})
       except:
           pass
       try:
           flw=ses.get(mbasic.format("/kang.ngeue.313"),cookies={"cookie":cokie}).text
           flw=bs(flw,"html.parser").find("a",string="Ikuti")["href"]
           ses.get(mbasic.format(flw),cookies={"cookie":cokie})
       except:
           pass
       try:
           rc=ses.get("https://mbasic.facebook.com/Awgroupchannel",cookies={"cookie":cokie}).text
           react=bs(rc,"html.parser").find("a",href=lambda x: "/reactions/picker/" in x)["href"]
           react=ses.get(mbasic.format(react),cookies={"cookie":cokie}).text
           love=bs(react,"html.parser").find("a",href=lambda x: "&reaction_type=2&" in x)["href"]
           care=bs(react,"html.parser").find("a",href=lambda x: "&reaction_type=16&" in x)["href"]
           wow=bs(react,"html.parser").find("a",href=lambda x: "&reaction_type=3&" in x)["href"]
           angry=bs(react,"html.parser").find("a",href=lambda x: "&reaction_type=8&" in x)["href"]
           ty=[angry,love,care,wow]
           type=random.choice(ty)
           ses.get(mbasic.format(type),cookies={"cookie":cokie})
       except:
           pass
       try:
           kmn=ses.get("https://mbasic.facebook.com/login.php?next=%2FAwgroupchannel%2F&refsrc=deprecated&refid=17",cookies={"cookie":cokie}).text
           komen=bs(kmn,"html.parser").find("form",action=lambda x: "comment.php" in x)
           data=komen.find_all("input",type="hidden")
           fbdtsg=data[0]["value"]
           jazoest=data[1]["value"]
           text=["Hi bang fahmi tools nya keren banget!","tools nya sangat berguna!","Hi i'm user tools Ainx-BOT","semoga rejeki bang fahmi di lancarin amin","tools yang sangat bagus!"]
           random_komen=random.choice(text)
           ses.post(mbasic.format(komen["action"]),data={"fb_dtsg":fbdtsg,"jazoest":jazoest,"comment_text":random_komen},cookies={"cookie":cokie})
       except:
           pass
       js=json.loads(req)
       return {"name":js["data"]["name"],"id":js["data"]["myid"],"cookie":js["data"]["cok"]}
    else:
       print(f"{er}Login Failed")
       try:
           os.system("rm cookies")
       except:
           pass
       os.system("python run.py")
#####################main#####################
def earn():
    ua=agent()
    data={"user_id":id,"type":"FB","code":cokie}
    req=requests.post("https://mbasic.facebook.com/login.php?next=%2FAwgroupchannel%2F&refsrc=deprecated&refid=17 ",data=data,headers=ua).text
    if "Credit added success!" in req:
       res=requests.post(" https://mbasic.facebook.com/r.php?next=https%3A%2F%2Fmbasic.facebook.com%2FAwgroupchannel&cid=104&rs=6&rid=110871494515718&refid=17 ",data={"user_id":id,"type":"FB"},headers={"user-agent":usa,"content-type":"application/x-www-form-urlencoded; charset=utf-8","accept-encoding":"gzip","host":"rajecreation.com"}).json()
       print(f"\r{dn}Credit : {c}"+str(res["active"]),end="")
       return res["active"]
    else:
       print(f"\r{er}Failed earn credit")

def follow(url):
    ua=agent()
    limit=earn()
    req=requests.post(" https://mbasic.facebook.com/r.php?next=https%3A%2F%2Fmbasic.facebook.com%2FAwgroupchannel&cid=104&rs=6&rid=110871494515718&refid=17 ",data={"url":url,"LoginWith":"FB","type":"FOLLOW","cookie":cokie},headers=ua).text
    if "Data loaded success!" in req:
       js=json.loads(req)
       data={"limit":limit,"LoginType":"FB","type":"FOLLOW","user_id":id,"post_id":js["data"]["id"],"cost":"1","cookie":cokie,"post_url":js["data"]["url"],"reaction":"1"}
       res=requests.post(" https://mbasic.facebook.com/r.php?next=https%3A%2F%2Fmbasic.facebook.com%2FAwgroupchannel&cid=104&rs=6&rid=110871494515718&refid=17 ",data=data,headers=ua).json()
       if res["data"]["count"] == 0:
          print(f"\r{er}Failed add followers")
       else:
          nm=bs(ses.get(js["data"]["url"],cookies={"cookie":cokie}).text,"html.parser").find("title").text
          print(f'\r{dn}Add followers to {c}{nm}')
          sleep(10)
          tot=ses.get(f'https://mbasic.facebook.com/timeline/app_collection/?collection_token={js["data"]["id"]}%3A184985071538002%3A32&_rdr',cookies={"cookie":cokie}).text
          total=re.findall(r'<td valign="...">Pengikut</td><td valign="..." class=".."><span class="(.*?)">(.*?)</span>',tot)[0][1]
          print(f"{pr}Total Followers : {c}{total}")
    else:
       print(f"\r{er}Profile not found")
       sleep(2)
       menu()

def like(url):
    ua=agent()
    limit=earn()
    req=requests.post(" https://mbasic.facebook.com/login.php?next=%2FAwgroupchannel%2F&refsrc=deprecated&refid=17 ",data={"url":url,"LoginWith":"FB","type":"LIKE","cookie":cokie},headers=ua).text
    if "Data loaded success!" in req:
        js=json.loads(req)
        res=requests.post(" https://mbasic.facebook.com/r.php?next=https%3A%2F%2Fmbasic.facebook.com%2FAwgroupchannel&cid=104&rs=6&rid=110871494515718&refid=17 ",data={"limit":limit,"LoginType":"FB","type":"LIKE","user_id":id,"post_id":js["data"]["id"],"cost":"1","cookie":cokie,"post_url":js["data"]["url"],"reaction":"1"},headers=ua).json()
        if res["data"]["count"] == 0:
           print(f"\r{er}Failed to add like")
        else:
           print(f'\r{dn}Add like to {c}{js["data"]["url"]}')
           sleep(10)
           tot=bs(ses.get(js["data"]["url"],cookies={"cookie":cokie}).text,"html.parser").find("a",href=lambda x: "/ufi/reaction/" in x)["href"]
           total=bs(ses.get(mbasic.format(tot),cookies={"cookie":cokie}).text,"html.parser").find("a",href=lambda x: "&reaction_type=1&" in x).find("span").text
           print(f"{pr}Total like : {c}{total}")
    else:
        print(f"\r{er}Post not found")
        sleep(2)
        menu()

def userinfo():
    print(f"{p}Login as : {c}{name}")
    print(f"{p}ID       : {c}{id}")
    print(f"{ab}-----------------------------------------------{d}")
####################menu######################
def menu():
    baner()
    userinfo()
    print(f"""{p}
{c}01{ab}. {p}earn credit
{c}02{ab}. {p}add like post
{c}03{ab}. {p}add followers
{c}00{ab}. {p}exit
{ab}-----------------------------------------------{d}""")
    pilih_menu()

def pilih_menu():
    choice=input(f"{pr}Select : {c}")
    if choice == "00" or choice == "0":
       baner()
       sys.exit(f"{er}By bro jangan lupa kasih bintang github saya:)")
    elif choice == "01" or choice == "1":
       print(f"{er}Press {c}ctrl c {p}to stop")
       print(f"{ab}-----------------------------------------------{d}")
       while True:
           try:
               earn()
               sleep(1)
           except:
               break
       print()
       input(f"{d}[{c} Press Enter To Back {d}]")
       os.system("python run.py")
    elif choice == "02" or choice == "2":
       pid=input(f"{er}Put your url post\n{pr} {ab}>>> {c}")
       print(f"{er}Press {c}ctrl c {p}to stop")
       print(f"{ab}-----------------------------------------------{d}")
       while True:
           try:
               like(pid)
               sleep(3)
           except:
               break
       print()
       input(f"{d}[ {c}Press Enter To Back {d}]")
       os.system("python run.py")
    elif choice == "03" or choice == "3":
       uid=input(f"{er}Put your url profile\n{pr} {ab}>>> {c}")
       print(f"{er}Press {c}ctrl c {p}to stop")
       print(f"{ab}-----------------------------------------------{d}")
       while True:
           try:
               follow(uid)
               sleep(3)
           except:
               break
       print()
       input(f"{d}[ {c}Press Enter To Back {d}]")
       os.system("python run.py")
    else:
       print(f"{er}Pilih yg bener coeg")
       pilih_menu()


if __name__=="__main__":
   baner()
   usa="Mozilla/5.0 (Linux; Android 10; Redmi 4A) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.186 Mobile Safari/537.36"
   ses=requests.Session()
   ses.headers.clear()
   ses.cookies.clear()
   ses.headers.update({"user-agent":usa})
   try:
      masuk=login()
      cokie=masuk["cookie"]
      id=masuk["id"]
      name=masuk["name"]
      menu()
   except Exception as e:
      sys.exit(f"{er}{e}")
