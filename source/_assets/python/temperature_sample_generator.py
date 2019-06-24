from pathlib import Path  # python3 only
from dotenv import load_dotenv
import os
import random
from datetime import datetime
import time
import json
import requests

# Load environment variables
env_path = Path('../../..') / '.env'
load_dotenv(dotenv_path=env_path)

# Structure INSERT GraphQL Query
query = """
mutation {
  insert_conditions (objects: [
    {
      time: "%s",
      location: "%s",
      temperature: %.2f,
      humidity: %.2f
    }
  ]) {
    affected_rows
  }
}
"""

# Define API request variables
url = 'http://' + os.getenv("API_SERVER") + '/v1/graphql'
headers = {
    'x-hasura-access-key': os.getenv("HASURA_ACCESS_KEY")
}

# Define categorical selctions
location_choices = ['loc1', 'loc2', 'loc3', 'loc4', 'home', 'office']

# Define function to post request
def mk_query(cur_time, loc, temp, humid):
    q = query % (cur_time, loc, temp, humid)
    print(q)
    r = requests.post(url, data=json.dumps({'query': q}), headers=headers)
    print(r.text)

# Infinite loop to generate random data
while True:
    temp = random.uniform(18.2, 39.89)
    humid = random.uniform(40.34, 92.87)
    loc = random.choice(location_choices)
    cur_time = datetime.utcnow().isoformat()
    mk_query(cur_time, loc, temp, humid)
    time.sleep(0.5)