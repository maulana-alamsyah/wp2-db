import hashlib

sah = "92d3fd4057d07f38474331ab231e1f0d"


for j in range(256):
    for k in range(256):
        for l in range(256):
            ip = "35.{}.{}.{}".format(l,k,j)
            has = hashlib.md5(ip.encode("utf-8")).hexdigest()
            if has[:10] == sah[:10]:
                print("{} == {}".format(has,ip))
                print("{} == {}".format(has,sah))
                print(ip)