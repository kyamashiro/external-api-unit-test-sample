<?php

namespace App\Clients;

class RandomUserMockClient implements RandomUserClientInterface
{
    public function getUser()
    {
        return json_decode('{"results":[{"gender":"female","name":{"title":"Ms","first":"Emma","last":"Roy"},"location":{"street":{"number":5582,"name":"3rd St"},"city":"Waterloo","state":"Québec","country":"Canada","postcode":"R1T 6E8","coordinates":{"latitude":"-65.4731","longitude":"50.5726"},"timezone":{"offset":"+5:00","description":"Ekaterinburg, Islamabad, Karachi, Tashkent"}},"email":"emma.roy@example.com","login":{"uuid":"6cab81ed-fb4b-488e-9326-a4b123342984","username":"greenostrich350","password":"blazers","salt":"SsTIH4Zn","md5":"8201b7fc0a57dd27deff9af26b3dd9d4","sha1":"971470622bb43b7399422385ea5c905ed5f25f97","sha256":"6d02d262cb69eeaf2dd2ee3d00a05580d351384885a0cc6bb0feb9e8c5cc11b1"},"dob":{"date":"1982-03-16T10:03:06.174Z","age":40},"registered":{"date":"2003-10-03T05:49:59.256Z","age":19},"phone":"212-165-2662","cell":"792-593-8790","id":{"name":"","value":null},"picture":{"large":"https://randomuser.me/api/portraits/women/15.jpg","medium":"https://randomuser.me/api/portraits/med/women/15.jpg","thumbnail":"https://randomuser.me/api/portraits/thumb/women/15.jpg"},"nat":"CA"}],"info":{"seed":"66762343f3b1ff4a","results":1,"page":1,"version":"1.3"}}');
    }
}
