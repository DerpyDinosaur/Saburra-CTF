function getFlags(){
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      var redFlagCount = 0;
      var blueFlagCount = 0;
      var flagArray = JSON.parse(this.responseText);

      for (var i = 0; i < 14; i++) {
        if(flagArray.redTeam['flag'+i] == 1) {
          redFlagCount = redFlagCount + 1;
        }

        if(flagArray.blueTeam['flag'+i] == 1) {
          blueFlagCount = blueFlagCount + 1;
        }
      }
      document.getElementById("redTeam").innerHTML = redFlagCount;
      document.getElementById("blueTeam").innerHTML = blueFlagCount;
    }
  };
  xmlhttp.open("GET", "custodia/flags.json", true);
  xmlhttp.send();
}

//Aliases
let Application = PIXI.Application,
    Container = PIXI.Container,
    loader = PIXI.loader,
    resources = PIXI.loader.resources,
    TextureCache = PIXI.utils.TextureCache,
    Sprite = PIXI.Sprite,
    Rectangle = PIXI.Rectangle;

//Create a Pixi Application
let app = new Application({ 
    width: window.innerWidth, 
    height: 800,                       
    antialias: true, 
    transparent: true, 
    resolution: 1
  }
);

//Add the canvas that Pixi automatically created for you to the HTML document
document.getElementById("sandcastle").appendChild(app.view);

//Textures
floorUrl      = "custodia/images/sandcastle/floor.png";
floorTwoUrl   = "custodia/images/sandcastle/floorTwo.png";
redTowersUrl  = "custodia/images/sandcastle/Rtowers.png";
redWallUrl    = "custodia/images/sandcastle/Rwall.png";
blueTowersUrl = "custodia/images/sandcastle/Btowers.png";
blueWallUrl   = "custodia/images/sandcastle/Bwall.png";
gateUrl       = "custodia/images/sandcastle/gate.png";
wallUrl       = "custodia/images/sandcastle/wallTwo.png";
bluePillarUrl = "custodia/images/sandcastle/Bpillar.png";
redPillarUrl  = "custodia/images/sandcastle/Rpillar.png";

loader
  .add(floorUrl)
  .add(floorTwoUrl)
  .add(redTowersUrl)
  .add(redWallUrl)
  .add(blueTowersUrl)
  .add(blueWallUrl)
  .add(gateUrl)
  .add(wallUrl)
  .add(bluePillarUrl)
  .add(redPillarUrl)
  .load(setup);

//Define any variables that are used in more than one function
let appWidth = window.innerWidth;
let redXOffset = appWidth - 637.3333333333334;
let sizeMod = 3;
// let redXOffset = ;

function setup() {
  // Create Floor sprite
  floor = new Sprite(resources[floorUrl].texture);
  floor.width = floor.width / sizeMod;
  floor.height = floor.height / sizeMod; 
  floor.x = 0;
  floor.y = 0;

  floorTwo = new Sprite(resources[floorTwoUrl].texture);
  floorTwo.width = floorTwo.width / sizeMod;
  floorTwo.height = floorTwo.height / sizeMod;
  floorTwo.x = 0;
  floorTwo.y = 0;

  // Create towers sprite
  towers = new Sprite(resources[blueTowersUrl].texture);
  towers.width = towers.width / sizeMod;
  towers.height = towers.height / sizeMod;
  towers.x = 0;
  towers.y = 500;

  // Create gate sprite
  gate = new Sprite(resources[gateUrl].texture);
  gate.width = gate.width / sizeMod;
  gate.height = gate.height / sizeMod;
  gate.x = 0;
  gate.y = 500;

  // Create wall sprite
  wall = new Sprite(resources[blueWallUrl].texture);
  wall.width = wall.width / sizeMod;
  wall.height = wall.height / sizeMod;
  wall.x = 0;
  wall.y = 500;

  wallTwo = new Sprite(resources[wallUrl].texture);
  wallTwo.width = wallTwo.width / sizeMod;
  wallTwo.height = wallTwo.height / sizeMod;
  wallTwo.x = 0;
  wallTwo.y = 500;

  // Create Pillar Sprite
  pillar = new Sprite(resources[bluePillarUrl].texture);
  pillar.width = pillar.width / sizeMod;
  pillar.height = pillar.height / sizeMod;
  pillar.x = 0;
  pillar.y = 600;

////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////

  // Create Floor sprite
  redFloor = new Sprite(resources[floorUrl].texture);
  redFloor.width = redFloor.width / sizeMod;
  redFloor.height = redFloor.height / sizeMod;
  redFloor.x = redXOffset;
  redFloor.y = 0;

  redFloorTwo = new Sprite(resources[floorTwoUrl].texture);
  redFloorTwo.width = redFloorTwo.width / sizeMod;
  redFloorTwo.height = redFloorTwo.height / sizeMod;
  redFloorTwo.x = redXOffset;
  redFloorTwo.y = 0;

  // Create towers sprite
  redTowers = new Sprite(resources[redTowersUrl].texture);
  redTowers.width = redTowers.width / sizeMod;
  redTowers.height = redTowers.height / sizeMod;
  redTowers.x = redXOffset;
  redTowers.y = 500;

  // Create gate sprite
  redGate = new Sprite(resources[gateUrl].texture);
  redGate.width = redGate.width / sizeMod;
  redGate.height = redGate.height / sizeMod;
  redGate.x = redXOffset;
  redGate.y = 500;

  // Create wall sprite
  redWall = new Sprite(resources[redWallUrl].texture);
  redWall.width = redWall.width / sizeMod;
  redWall.height = redWall.height / sizeMod;
  redWall.x = redXOffset;
  redWall.y = 500;

  redWallTwo = new Sprite(resources[wallUrl].texture);
  redWallTwo.width = redWallTwo.width / sizeMod;
  redWallTwo.height = redWallTwo.height / sizeMod;
  redWallTwo.x = redXOffset;
  redWallTwo.y = 500;

  // Create Pillar Sprite
  redPillar = new Sprite(resources[redPillarUrl].texture);
  redPillar.width = redPillar.width / sizeMod;
  redPillar.height = redPillar.height / sizeMod;
  redPillar.x = redXOffset;
  redPillar.y = 600;
  
  // Stage Creation
  app.stage.addChild(floorTwo);
  app.stage.addChild(wallTwo);
  app.stage.addChild(pillar);
  app.stage.addChild(wall);
  app.stage.addChild(towers);
  app.stage.addChild(gate);
  app.stage.addChild(floor);

  app.stage.addChild(redFloorTwo);
  app.stage.addChild(redWallTwo);
  app.stage.addChild(redPillar);
  app.stage.addChild(redWall);
  app.stage.addChild(redTowers);
  app.stage.addChild(redGate);
  app.stage.addChild(redFloor);
  
  //Start the game loop
  app.ticker.add(delta => gameLoop(delta));
}

function gameLoop(delta){
  getFlags();

  redFlagScore = document.getElementById("redTeam").innerHTML;
  blueFlagScore = document.getElementById("blueTeam").innerHTML;

  if (redTowers.y > 150 && redFlagScore >= 1) {
    redTowers.y -= 2;
  }
  else if (redTowers.y > 0 && redFlagScore >= 2) {
    redTowers.y -= 2;
  }
  else if (redGate.y > 100 && redFlagScore >= 3) {
    redGate.y -= 2;
  }  
  else if (redGate.y > 50 && redFlagScore >= 4) {
    redGate.y -= 2;
  }  
  else if (redGate.y > 0 && redFlagScore >= 5) {
    redGate.y -= 2;
  }
  else if (redWall.y > 150 && redFlagScore >= 6) {
    redWall.y -= 2;
    redWallTwo.y -= 2;
  }
  else if (redWall.y > 0 && redFlagScore >= 7) {
    redWall.y -= 2;
    redWallTwo.y -= 2;
  }  
  else if (redPillar.y > 150 && redFlagScore >= 8) {
    redPillar.y -= 2;
  }  
  else if (redPillar.y > 0 && redFlagScore >= 9) {
    redPillar.y -= 2;
  }

  if (towers.y > 150 && blueFlagScore >= 1) {
    towers.y -= 2;
  }
  else if (towers.y > 0 && blueFlagScore >= 2) {
    towers.y -= 2;
  }
  else if (gate.y > 100 && blueFlagScore >= 3) {
    gate.y -= 2;
  }  
  else if (gate.y > 50 && blueFlagScore >= 4) {
    gate.y -= 2;
  }  
  else if (gate.y > 0 && blueFlagScore >= 5) {
    gate.y -= 2;
  }
  else if (wall.y > 150 && blueFlagScore >= 6) {
    wall.y -= 2;
    wallTwo.y -= 2;
  }
  else if (wall.y > 0 && blueFlagScore >= 7) {
    wall.y -= 2;
    wallTwo.y -= 2;
  }  
  else if (pillar.y > 150 && blueFlagScore >= 8) {
    pillar.y -= 2;
  }  
  else if (pillar.y > 0 && blueFlagScore >= 9) {
    pillar.y -= 2;
  }
}