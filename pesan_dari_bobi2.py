import binascii
soal = '68 34 63 6B 6D 33 7B 73 74 52 31 6E 47 5F 64 34 4C 34 6D 5F 62 33 6E 74 75 6B 5F 68 65 78 7D'
s = soal.split(' ')
print(''.join([binascii.unhexlify(x).decode('utf-8') for x in s]))