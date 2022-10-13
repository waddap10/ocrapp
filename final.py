import easyocr
import cv2
import numpy as np
import argparse
import json

parser = argparse.ArgumentParser(description='.')
parser.add_argument("path", nargs='?', default="blah")
a = parser.parse_args()


#Custom function to show open cv image on notebook.
def preprocessing_image(img):
    #Resize image 
    img = cv2.resize(img, None, fx=1.5, fy=1.5, interpolation=cv2.INTER_CUBIC)

    #convert to grayscale
    gray = cv2.cvtColor(img, cv2.COLOR_BGR2GRAY)
    gray = cv2.multiply(gray, 1.5)
    
    #blur remove noise
    blured1 = cv2.medianBlur(gray,3)
    blured2 = cv2.medianBlur(gray,51)
    divided = np.ma.divide(blured1, blured2).data
    normed = np.uint8(255*divided/divided.max())
    
    
    #Threshold image
    th, threshed = cv2.threshold(normed, 0, 255, cv2.THRESH_OTSU + cv2.THRESH_BINARY)
    
    return gray

reader = easyocr.Reader(['id'])

p1 = "C:/xampp/htdocs/ocrappv2/assets/images/"
p2 = p1+a.path


img = cv2.imread(p2)
l = int(np.floor(img.shape[1]*.7))
img = img[0:int(img.shape[0]), 0:l]
testPreprocess = preprocessing_image(img)
result2 = reader.readtext(img, detail = 0)
stopwords = ['PROVINSI',
            'NIK', 
            'Nama', 
            'Tempat', 'Tgl', 'Lahir', 
            'Jenis','Kelamin', 'Alamat', 'RT' , 'RW', 'Kel','Desa', 
            'Kecamatan', 'Agama', 'Status', 'Perkawinan', 'Pekerjaan', 
            'Kewarganegaraan', 'Berlaku', 'Hingga',
            'Gol', 'Darah']

def remove_words(in_list, char_list):
    new_list = []
    for line in in_list:
        new_words = ' '.join([word for word in line.split() if not any([phrase in word for phrase in char_list])])
        new_list.append(new_words)
    return new_list
        
res = remove_words(result2, stopwords)

text = []
for x in res:
    if x not in ('', ' '):
        text.append(x)
        

data = {
    'provinsi': text[0],
    'kota': text[1],
    'nik': text[2],
    'nama': text[3],
    'ttl': text[4],
    'gender': text[5],
    'alamat': text[6],
    'rtrw': text[7]+'/'+text[8],
    'desa': text[9],
    'kec': text[10],
    'agama': text[11],
    'sts_kawin': text[12],
    'job': text[13],
    'nation': text[14],
    'exp': text[15],
    'goldar': '-',
    'nama_image': a.path
}

a_file = open("C:/xampp/htdocs/ocrappv2/assets/json/read_data.json", "w")
a_file = json.dump(data, a_file)

data