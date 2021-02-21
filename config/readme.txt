GET /api/incidents HTTP/1.1
Host: 127.0.0.1:8000
Content-Type: application/json
Cache-Control: no-cache
Postman-Token: 4522a334-fd8c-6efd-85ad-d65cdaa5e56a



POST /api/incidents/production HTTP/1.1
Host: 127.0.0.1:8000
Content-Type: application/json
Cache-Control: no-cache
Postman-Token: 72b7d02a-0cad-a909-31bc-b15da801c67a

{
  "data": [
    {
      "id": 0,
      "location": {
        "latitude": 12.9231501,
        "longitude": 74.7818517
      },
      "title": "incident title",
      "category": 1,
      "people": [
        {
          "name": "Name of person",
          "type": "staff"
        },
        {
          "name": "Name of person",
          "type": "witness"
        },
        {
          "name": "Name of person",
          "type": "staff"
        }
      ],
      "comments": "This is a string of comments",
      "incidentDate": "2020-09-01T13:26:00+00:00",
      "createDate": "2020-09-01T13:32:59+01:00",
      "modifyDate": "2020-09-01T13:32:59+01:00"
    }
  ]
}