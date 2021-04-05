import requests
import secrets

def add_images(keyword):
    #print(keyword)
    unsplash_id = "68v3ORszpL88DpDN0vKI3IAtYWFo1mi4Kc5a--TVqiM"
    unsplash_url = "https://api.unsplash.com/search/photos"

    per_page = 10
    obj = requests.get(unsplash_url,
            params={'client_id': unsplash_id, 'query': keyword}).json()

    if obj['total'] == 0:
        obj = requests.get(unsplash_url,
                params={'client_id': unsplash_id, 'query': 'grocery'}).json()

    #photo_id = secrets.randbelow(obj['total'])
    photo_id = 0

    img_url = obj['results'][photo_id]['urls']['small']
    img_color = obj['results'][photo_id]['color']

    return img_url, img_color