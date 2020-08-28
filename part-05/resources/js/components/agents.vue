<template>
<div class="flex flex-col break-words bg-white border border-2 rounded shadow-md">

                <div class="font-semibold bg-gray-200 text-gray-700 py-3 px-6 mb-0">
                    
                    Agents {{ selectedDirection }}

                </div>

                 <div class="flex h-10 pt-4">
                     
                     <div class="w-1/4 pl-6 flex">
                        
                        <span class="inline-block">name</span>

                        <span :class="{'text-yellow-400': selectedColumn == 'name'}">
                            
                            <svg @click="setOrderResultsBy('name')" viewBox="0 0 400 500" class="h-4 w-6 fill-current" xmlns="http://www.w3.org/2000/svg">
                            
                                <path d="M131.564 219.258h230.13c9.314 0 17.857-5.16 22.203-13.389a25.12 25.12 0 00-1.494-25.895L265.92 9.772A22.485 22.485 0 00247.461 0a22.436 22.436 0 00-18.507 9.658L110.935 179.863a25.1 25.1 0 00-1.607 25.941 25.114 25.114 0 0022.236 13.454zM361.694 273.998h-230.13a25.117 25.117 0 00-22.236 13.455 25.099 25.099 0 001.607 25.939l118.019 170.205a22.443 22.443 0 0018.507 9.66 22.485 22.485 0 0018.459-9.772L382.403 313.28a25.119 25.119 0 001.494-25.895 25.116 25.116 0 00-22.203-13.387z"/>
                            
                            </svg>
                        
                        </span>

                     </div>

                     <div class="w-1/2">

                     <div class="w-1/4 flex">
                     
                     <span class="inline-block">email</span>

                        <span :class="{'text-yellow-400': selectedColumn == 'email'}">
                            
                            <svg @click="setOrderResultsBy('email')" viewBox="0 0 400 500" class="h-4 w-6 fill-current" xmlns="http://www.w3.org/2000/svg">
                            
                                <path d="M131.564 219.258h230.13c9.314 0 17.857-5.16 22.203-13.389a25.12 25.12 0 00-1.494-25.895L265.92 9.772A22.485 22.485 0 00247.461 0a22.436 22.436 0 00-18.507 9.658L110.935 179.863a25.1 25.1 0 00-1.607 25.941 25.114 25.114 0 0022.236 13.454zM361.694 273.998h-230.13a25.117 25.117 0 00-22.236 13.455 25.099 25.099 0 001.607 25.939l118.019 170.205a22.443 22.443 0 0018.507 9.66 22.485 22.485 0 0018.459-9.772L382.403 313.28a25.119 25.119 0 001.494-25.895 25.116 25.116 0 00-22.203-13.387z"/>
                            
                            </svg>
                        
                        </span>
                     </div>

                     </div>

                     <div class="w-1/4 flex">
                     
                     <span class="inline-block">office</span>

                        <span :class="{'text-yellow-400': selectedColumn == 'office'}">
                            
                            <svg @click="setOrderResultsBy('office')" viewBox="0 0 400 500" class="h-4 w-6 fill-current" xmlns="http://www.w3.org/2000/svg">
                            
                                <path d="M131.564 219.258h230.13c9.314 0 17.857-5.16 22.203-13.389a25.12 25.12 0 00-1.494-25.895L265.92 9.772A22.485 22.485 0 00247.461 0a22.436 22.436 0 00-18.507 9.658L110.935 179.863a25.1 25.1 0 00-1.607 25.941 25.114 25.114 0 0022.236 13.454zM361.694 273.998h-230.13a25.117 25.117 0 00-22.236 13.455 25.099 25.099 0 001.607 25.939l118.019 170.205a22.443 22.443 0 0018.507 9.66 22.485 22.485 0 0018.459-9.772L382.403 313.28a25.119 25.119 0 001.494-25.895 25.116 25.116 0 00-22.203-13.387z"/>
                            
                            </svg>
                        
                        </span>

                     </div>

                 </div>

                <div class="w-full text-left">

                    <div :class="{'bg-gray-200' : (index + 1) % 2 == 0}" class="flex h-10 pt-2" v-for="(agent, index) in orderedAgents" v-bind:key="agent._id">

                        <div class="w-1/4 pl-6">{{agent.name.first}} {{agent.name.last}}</div>

                        <div class="w-1/2">{{agent.email}}</div>

                        <div class="w-1/4">{{agent.office}}</div>

                    </div>
              
                </div>

            </div>

</template>

<script>



export default {

    methods:{

        setOrderResultsBy: function( column ){

            if(this.selectedColumn == column){

                if(this.selectedDirection == 'desc'){

                    this.selectedDirection = 'asc'

                }else{

                    this.selectedDirection = 'desc'

                }
            }else{

                this.selectedDirection = 'asc'
                
            }

            this.selectedColumn = column

        }

    },

    computed: {

        orderedAgents: function(){

            switch (this.selectedColumn){

                case 'name':

                    return _.orderBy(this.agents, ['name.first'], [ this.selectedDirection ])
                    
                break

                case 'email':

                    return _.orderBy(this.agents, ['email'], [ this.selectedDirection ])

                break

                case 'office':

                    return _.orderBy(this.agents, ['office'], [ this.selectedDirection ])

                break

            }

        }

    },

    data: function(){

        return {
        
        selectedColumn: 'name',

        selectedDirection: 'asc',

            agents: [
  {
    "_id": "5e0511e722a5f8ae1e565cbc",
    "isActive": false,
    "picture": "http://placehold.it/32x32",
    "name": {
      "first": "Mason",
      "last": "Deleon"
    },
    "office": "east",
    "email": "mason.deleon@undefined.biz"
  },
  {
    "_id": "5e0511e78bd62b87b7b0025c",
    "isActive": true,
    "picture": "http://placehold.it/32x32",
    "name": {
      "first": "Denise",
      "last": "Fernandez"
    },
    "office": "east",
    "email": "denise.fernandez@undefined.org"
  },
  {
    "_id": "5e0511e7dc100fad86e743e1",
    "isActive": true,
    "picture": "http://placehold.it/32x32",
    "name": {
      "first": "Navarro",
      "last": "Logan"
    },
    "office": "east",
    "email": "navarro.logan@undefined.tv"
  },
  {
    "_id": "5e0511e7a774301349c82bb9",
    "isActive": false,
    "picture": "http://placehold.it/32x32",
    "name": {
      "first": "Juarez",
      "last": "Acosta"
    },
    "office": "east",
    "email": "juarez.acosta@undefined.name"
  },
  {
    "_id": "5e0511e789ea32744cdc030e",
    "isActive": false,
    "picture": "http://placehold.it/32x32",
    "name": {
      "first": "Rosemary",
      "last": "Nelson"
    },
    "office": "east",
    "email": "rosemary.nelson@undefined.info"
  },
  {
    "_id": "5e0511e7e3b6fd5c27721c64",
    "isActive": true,
    "picture": "http://placehold.it/32x32",
    "name": {
      "first": "Irwin",
      "last": "Pace"
    },
    "office": "south",
    "email": "irwin.pace@undefined.ca"
  },
  {
    "_id": "5e0511e7b3e203443af6aff0",
    "isActive": false,
    "picture": "http://placehold.it/32x32",
    "name": {
      "first": "Frieda",
      "last": "Gilbert"
    },
    "office": "east",
    "email": "frieda.gilbert@undefined.me"
  },
  {
    "_id": "5e0511e7030c93555204b799",
    "isActive": false,
    "picture": "http://placehold.it/32x32",
    "name": {
      "first": "Barber",
      "last": "Lancaster"
    },
    "office": "north",
    "email": "barber.lancaster@undefined.io"
  },
  {
    "_id": "5e0511e7c307a4d768d87948",
    "isActive": true,
    "picture": "http://placehold.it/32x32",
    "name": {
      "first": "Pena",
      "last": "Snyder"
    },
    "office": "north",
    "email": "pena.snyder@undefined.us"
  },
  {
    "_id": "5e0511e748df454b5004e965",
    "isActive": true,
    "picture": "http://placehold.it/32x32",
    "name": {
      "first": "Tyson",
      "last": "Baird"
    },
    "office": "west",
    "email": "tyson.baird@undefined.biz"
  },
  {
    "_id": "5e0511e70df157ba4404d643",
    "isActive": true,
    "picture": "http://placehold.it/32x32",
    "name": {
      "first": "Ina",
      "last": "Glass"
    },
    "office": "downtown",
    "email": "ina.glass@undefined.com"
  },
  {
    "_id": "5e0511e7e3ed2e5c931b8732",
    "isActive": false,
    "picture": "http://placehold.it/32x32",
    "name": {
      "first": "Sawyer",
      "last": "Winters"
    },
    "office": "south",
    "email": "sawyer.winters@undefined.co.uk"
  },
  {
    "_id": "5e0511e7252bf02f20c2432f",
    "isActive": false,
    "picture": "http://placehold.it/32x32",
    "name": {
      "first": "Dona",
      "last": "Mcgowan"
    },
    "office": "north",
    "email": "dona.mcgowan@undefined.biz"
  },
  {
    "_id": "5e0511e72a596e5110ab45d6",
    "isActive": false,
    "picture": "http://placehold.it/32x32",
    "name": {
      "first": "Craig",
      "last": "Hooper"
    },
    "office": "north",
    "email": "craig.hooper@undefined.org"
  },
  {
    "_id": "5e0511e772514922ec708b62",
    "isActive": false,
    "picture": "http://placehold.it/32x32",
    "name": {
      "first": "Joni",
      "last": "Carney"
    },
    "office": "west",
    "email": "joni.carney@undefined.tv"
  },
  {
    "_id": "5e0511e7b0eec419ab064097",
    "isActive": false,
    "picture": "http://placehold.it/32x32",
    "name": {
      "first": "Hill",
      "last": "Lawrence"
    },
    "office": "downtown",
    "email": "hill.lawrence@undefined.name"
  },
  {
    "_id": "5e0511e7327d7f38ac391c9b",
    "isActive": false,
    "picture": "http://placehold.it/32x32",
    "name": {
      "first": "Whitfield",
      "last": "Tillman"
    },
    "office": "downtown",
    "email": "whitfield.tillman@undefined.info"
  },
  {
    "_id": "5e0511e71229d34129569fae",
    "isActive": true,
    "picture": "http://placehold.it/32x32",
    "name": {
      "first": "Aileen",
      "last": "Cain"
    },
    "office": "north",
    "email": "aileen.cain@undefined.ca"
  },
  {
    "_id": "5e0511e732da955c2ec90792",
    "isActive": false,
    "picture": "http://placehold.it/32x32",
    "name": {
      "first": "Jensen",
      "last": "Jenkins"
    },
    "office": "east",
    "email": "jensen.jenkins@undefined.me"
  },
  {
    "_id": "5e0511e735bf0da5b95f7cb1",
    "isActive": false,
    "picture": "http://placehold.it/32x32",
    "name": {
      "first": "Jodie",
      "last": "Hayden"
    },
    "office": "west",
    "email": "jodie.hayden@undefined.io"
  },
  {
    "_id": "5e0511e7beede71faffb616a",
    "isActive": false,
    "picture": "http://placehold.it/32x32",
    "name": {
      "first": "Estella",
      "last": "Waters"
    },
    "office": "downtown",
    "email": "estella.waters@undefined.us"
  },
  {
    "_id": "5e0511e7b5a1b674bd2c094c",
    "isActive": false,
    "picture": "http://placehold.it/32x32",
    "name": {
      "first": "Monique",
      "last": "England"
    },
    "office": "east",
    "email": "monique.england@undefined.biz"
  },
  {
    "_id": "5e0511e7f9dcb5146b0b8674",
    "isActive": true,
    "picture": "http://placehold.it/32x32",
    "name": {
      "first": "Jordan",
      "last": "Maddox"
    },
    "office": "west",
    "email": "jordan.maddox@undefined.com"
  },
  {
    "_id": "5e0511e7544740668bca0ecf",
    "isActive": true,
    "picture": "http://placehold.it/32x32",
    "name": {
      "first": "Woodward",
      "last": "Foreman"
    },
    "office": "north",
    "email": "woodward.foreman@undefined.co.uk"
  },
  {
    "_id": "5e0511e770bc5a5f79181442",
    "isActive": false,
    "picture": "http://placehold.it/32x32",
    "name": {
      "first": "Odessa",
      "last": "Hodge"
    },
    "office": "south",
    "email": "odessa.hodge@undefined.biz"
  },
  {
    "_id": "5e0511e7b7c21c88e8cc6b1a",
    "isActive": false,
    "picture": "http://placehold.it/32x32",
    "name": {
      "first": "Carole",
      "last": "Lindsey"
    },
    "office": "north",
    "email": "carole.lindsey@undefined.org"
  },
  {
    "_id": "5e0511e706efa6c956ae00a9",
    "isActive": false,
    "picture": "http://placehold.it/32x32",
    "name": {
      "first": "Lidia",
      "last": "Barker"
    },
    "office": "east",
    "email": "lidia.barker@undefined.tv"
  },
  {
    "_id": "5e0511e746e4941a590c9d40",
    "isActive": false,
    "picture": "http://placehold.it/32x32",
    "name": {
      "first": "Lupe",
      "last": "Murray"
    },
    "office": "west",
    "email": "lupe.murray@undefined.name"
  },
  {
    "_id": "5e0511e75ef5c45456dada34",
    "isActive": false,
    "picture": "http://placehold.it/32x32",
    "name": {
      "first": "Gale",
      "last": "Hartman"
    },
    "office": "downtown",
    "email": "gale.hartman@undefined.info"
  },
  {
    "_id": "5e0511e7df02fb83c425f659",
    "isActive": false,
    "picture": "http://placehold.it/32x32",
    "name": {
      "first": "Townsend",
      "last": "Garner"
    },
    "office": "east",
    "email": "townsend.garner@undefined.ca"
  },
  {
    "_id": "5e0511e73b80c98b043d11d4",
    "isActive": true,
    "picture": "http://placehold.it/32x32",
    "name": {
      "first": "Bonita",
      "last": "Coffey"
    },
    "office": "north",
    "email": "bonita.coffey@undefined.me"
  },
  {
    "_id": "5e0511e799cf5ebb288c8469",
    "isActive": true,
    "picture": "http://placehold.it/32x32",
    "name": {
      "first": "Case",
      "last": "Ayala"
    },
    "office": "west",
    "email": "case.ayala@undefined.io"
  },
  {
    "_id": "5e0511e7aa47b15bbe0c9757",
    "isActive": true,
    "picture": "http://placehold.it/32x32",
    "name": {
      "first": "Angela",
      "last": "Cabrera"
    },
    "office": "west",
    "email": "angela.cabrera@undefined.us"
  },
  {
    "_id": "5e0511e7e680a4f883fc5044",
    "isActive": false,
    "picture": "http://placehold.it/32x32",
    "name": {
      "first": "Shaw",
      "last": "Dixon"
    },
    "office": "downtown",
    "email": "shaw.dixon@undefined.biz"
  },
  {
    "_id": "5e0511e7b4e761dc5c44b985",
    "isActive": false,
    "picture": "http://placehold.it/32x32",
    "name": {
      "first": "Ruiz",
      "last": "Quinn"
    },
    "office": "south",
    "email": "ruiz.quinn@undefined.com"
  },
  {
    "_id": "5e0511e79fe1f9e29bfa3c27",
    "isActive": true,
    "picture": "http://placehold.it/32x32",
    "name": {
      "first": "Tameka",
      "last": "Le"
    },
    "office": "west",
    "email": "tameka.le@undefined.co.uk"
  },
  {
    "_id": "5e0511e7732b650cedc085e5",
    "isActive": false,
    "picture": "http://placehold.it/32x32",
    "name": {
      "first": "Alisha",
      "last": "Riddle"
    },
    "office": "downtown",
    "email": "alisha.riddle@undefined.biz"
  },
  {
    "_id": "5e0511e7dc0851194e6d4ff1",
    "isActive": true,
    "picture": "http://placehold.it/32x32",
    "name": {
      "first": "Riley",
      "last": "Norris"
    },
    "office": "north",
    "email": "riley.norris@undefined.org"
  },
  {
    "_id": "5e0511e7379571f2d0a273c3",
    "isActive": true,
    "picture": "http://placehold.it/32x32",
    "name": {
      "first": "Talley",
      "last": "Wade"
    },
    "office": "south",
    "email": "talley.wade@undefined.tv"
  },
  {
    "_id": "5e0511e7891bb1d98fb27217",
    "isActive": false,
    "picture": "http://placehold.it/32x32",
    "name": {
      "first": "Candy",
      "last": "Hoover"
    },
    "office": "west",
    "email": "candy.hoover@undefined.name"
  },
  {
    "_id": "5e0511e7c8f8c4d11eccb988",
    "isActive": true,
    "picture": "http://placehold.it/32x32",
    "name": {
      "first": "Small",
      "last": "Golden"
    },
    "office": "downtown",
    "email": "small.golden@undefined.info"
  },
  {
    "_id": "5e0511e744ac712baf8022ab",
    "isActive": true,
    "picture": "http://placehold.it/32x32",
    "name": {
      "first": "Mccoy",
      "last": "Atkins"
    },
    "office": "north",
    "email": "mccoy.atkins@undefined.ca"
  },
  {
    "_id": "5e0511e749e620edb05d27d9",
    "isActive": false,
    "picture": "http://placehold.it/32x32",
    "name": {
      "first": "Dickson",
      "last": "Mack"
    },
    "office": "west",
    "email": "dickson.mack@undefined.me"
  },
  {
    "_id": "5e0511e78f636d8a5f0395dc",
    "isActive": true,
    "picture": "http://placehold.it/32x32",
    "name": {
      "first": "Brandie",
      "last": "Brennan"
    },
    "office": "east",
    "email": "brandie.brennan@undefined.io"
  },
  {
    "_id": "5e0511e7687c62487e32307e",
    "isActive": true,
    "picture": "http://placehold.it/32x32",
    "name": {
      "first": "Hahn",
      "last": "Dawson"
    },
    "office": "downtown",
    "email": "hahn.dawson@undefined.us"
  },
  {
    "_id": "5e0511e70a81dbd0336d20c3",
    "isActive": false,
    "picture": "http://placehold.it/32x32",
    "name": {
      "first": "Andrews",
      "last": "Vang"
    },
    "office": "east",
    "email": "andrews.vang@undefined.biz"
  },
  {
    "_id": "5e0511e7028c13a49b1ea6c6",
    "isActive": false,
    "picture": "http://placehold.it/32x32",
    "name": {
      "first": "Hamilton",
      "last": "Buck"
    },
    "office": "north",
    "email": "hamilton.buck@undefined.com"
  },
  {
    "_id": "5e0511e707d3c2b903811d45",
    "isActive": false,
    "picture": "http://placehold.it/32x32",
    "name": {
      "first": "Munoz",
      "last": "Sykes"
    },
    "office": "downtown",
    "email": "munoz.sykes@undefined.co.uk"
  },
  {
    "_id": "5e0511e7c6a1025fbbacb422",
    "isActive": true,
    "picture": "http://placehold.it/32x32",
    "name": {
      "first": "Jennings",
      "last": "Bender"
    },
    "office": "east",
    "email": "jennings.bender@undefined.biz"
  },
  {
    "_id": "5e0511e71583e87b3a1b4b81",
    "isActive": false,
    "picture": "http://placehold.it/32x32",
    "name": {
      "first": "Rosanna",
      "last": "Jimenez"
    },
    "office": "west",
    "email": "rosanna.jimenez@undefined.org"
  }
]

        }

    }

}
</script>

<style>

</style>
