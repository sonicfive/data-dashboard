<template>
<div class="flex flex-col break-words bg-white border border-2 rounded shadow-md">

                <div class="font-semibold bg-gray-200 text-gray-700 py-3 px-6 mb-0">
                    Users
                </div>

                <div class="w-full p-6">
                    <table>
                        <thead>
                         <tr>
                          <td>id</td>
                          <td>name</td>
                          <td>email</td>
                         </tr>
                        </thead>
                      <tbody>
                         <tr v-for="user in users" v-bind:key="user._id">
                          <td>{{user._id}}</td>
                          <td>{{user.name}}</td>
                          <td>{{user.email}}</td>
                         </tr>
                       </tbody>
                      </table>
                </div>
            </div>
</template>

<script>
export default {

    data: function(){

        return {

            users: [

            {
                "_id": "5e00fde24086e927d70a3f68",
                "isActive": false,
                "picture": "http://placehold.it/32x32",
                "name": {
                "first": "Elisa",
                "last": "Jensen"
                },
                "email": "elisa.jensen@undefined.co.uk"
            },
            {
                "_id": "5e00fde253fc5fc62040725a",
                "isActive": true,
                "picture": "http://placehold.it/32x32",
                "name": {
                "first": "Levy",
                "last": "Fitzpatrick"
                },
                "email": "levy.fitzpatrick@undefined.biz"
            },
            {
                "_id": "5e00fde28377f4661816707f",
                "isActive": false,
                "picture": "http://placehold.it/32x32",
                "name": {
                "first": "Naomi",
                "last": "Montoya"
                },
                "email": "naomi.montoya@undefined.net"
            },
            {
                "_id": "5e00fde2335e8a38ff15c69a",
                "isActive": true,
                "picture": "http://placehold.it/32x32",
                "name": {
                "first": "Raymond",
                "last": "Best"
                },
                "email": "raymond.best@undefined.com"
            },
            {
                "_id": "5e00fde2c3fe30b242093f8f",
                "isActive": true,
                "picture": "http://placehold.it/32x32",
                "name": {
                "first": "Catalina",
                "last": "Patterson"
                },
                "email": "catalina.patterson@undefined.tv"
            },
            {
                "_id": "5e00fde2bc81131ccab7cf83",
                "isActive": false,
                "picture": "http://placehold.it/32x32",
                "name": {
                "first": "Berry",
                "last": "Hooper"
                },
                "email": "berry.hooper@undefined.ca"
            },
            {
                "_id": "5e00fde261242d1732245305",
                "isActive": true,
                "picture": "http://placehold.it/32x32",
                "name": {
                "first": "Dennis",
                "last": "Curry"
                },
                "email": "dennis.curry@undefined.io"
            },
            {
                "_id": "5e00fde2996f564c2cf5fbf1",
                "isActive": true,
                "picture": "http://placehold.it/32x32",
                "name": {
                "first": "Sophie",
                "last": "Hopper"
                },
                "email": "sophie.hopper@undefined.org"
            },
            {
                "_id": "5e00fde2e1a801cd76d556e2",
                "isActive": false,
                "picture": "http://placehold.it/32x32",
                "name": {
                "first": "Gina",
                "last": "Browning"
                },
                "email": "gina.browning@undefined.me"
            },
            {
                "_id": "5e00fde2834f32b6a3b7bce6",
                "isActive": false,
                "picture": "http://placehold.it/32x32",
                "name": {
                "first": "Natasha",
                "last": "Chavez"
                },
                "email": "natasha.chavez@undefined.name"
            },
            {
                "_id": "5e00fde29a02cdf7f45c2356",
                "isActive": true,
                "picture": "http://placehold.it/32x32",
                "name": {
                "first": "Mccarty",
                "last": "Klein"
                },
                "email": "mccarty.klein@undefined.biz"
            },
            {
                "_id": "5e00fde21bd663340ae58fed",
                "isActive": true,
                "picture": "http://placehold.it/32x32",
                "name": {
                "first": "Little",
                "last": "West"
                },
                "email": "little.west@undefined.us"
            },
            {
                "_id": "5e00fde27e1fcdd3e58c8536",
                "isActive": false,
                "picture": "http://placehold.it/32x32",
                "name": {
                "first": "Edith",
                "last": "Crawford"
                },
                "email": "edith.crawford@undefined.co.uk"
            },
            {
                "_id": "5e00fde27f5c3f3b6b6bcfa7",
                "isActive": true,
                "picture": "http://placehold.it/32x32",
                "name": {
                "first": "Cora",
                "last": "Ramos"
                },
                "email": "cora.ramos@undefined.biz"
            },
            {
                "_id": "5e00fde2e6417fa39e88b9ad",
                "isActive": false,
                "picture": "http://placehold.it/32x32",
                "name": {
                "first": "Kirk",
                "last": "Bailey"
                },
                "email": "kirk.bailey@undefined.net"
            },
            {
                "_id": "5e00fde214dff96fa25173fb",
                "isActive": true,
                "picture": "http://placehold.it/32x32",
                "name": {
                "first": "Hope",
                "last": "Spence"
                },
                "email": "hope.spence@undefined.com"
            },
            {
                "_id": "5e00fde2c15df1bc8eac042d",
                "isActive": false,
                "picture": "http://placehold.it/32x32",
                "name": {
                "first": "Terry",
                "last": "Charles"
                },
                "email": "terry.charles@undefined.tv"
            },
            {
                "_id": "5e00fde2604dc87d4fa8838d",
                "isActive": false,
                "picture": "http://placehold.it/32x32",
                "name": {
                "first": "Nikki",
                "last": "Craft"
                },
                "email": "nikki.craft@undefined.ca"
            }
            ]

        }

    }

}
</script>

<style>

</style>
