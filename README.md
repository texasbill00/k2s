# k2s
## install
- php7
- phantomcookies/cookies
- phantomjs
### phantomjs
```
wget -O /tmp/phantomjs.tar.bz2 https://bitbucket.org/ariya/phantomjs/downloads/phantomjs-2.1.1-linux-x86_64.tar.bz2 # 64-bit
# wget -O /tmp/phantomjs.tar.bz2 https://bitbucket.org/ariya/phantomjs/downloads/phantomjs-2.1.1-linux-i686.tar.bz2 # 32-bit
tar -xf /tmp/phantomjs.tar.bz2 -C /tmp
rm -rf /tmp/phantomjs.tar.bz2
mv /tmp/phantomjs-2.1.1-linux-x86_64/bin/phantomjs /usr/local/bin/phantomjs # 64-bit
# mv /tmp/phantomjs-2.1.1-linux-i686/bin/phantomjs /usr/local/bin/phantomjs # 32-bit
rm -rf /tmp/phantomjs-2.1.1-linux-x86_64 # 64-bit
# rm -rf /tmp/phantomjs-2.1.1-linux-i686 # 32-bit

# chmod? chown?
```
