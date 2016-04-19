window.onload = function() {
    s = Snap("#svg");

    s.image('../images/senardgy_color_selector.jpg', 0, 0, 400, 524);
    
    wall1 = s.path(["M102 289l55 0 0 1 1 2 0 2 0 4 0 1 9 0 0 -3 0 -3 0 -2 0 -2 14 0 1 2 0 1 0 3 0 3 0 1 9 0 0 -3 0 -2 0 -2 0 -2 0 -1 15 0 0 2 0 2 0 2 0 3 1 1 8 0 0 -3 0 -2 1 -3 0 -2 14 0 0 2 0 3 1 2 0 2 0 1 8 0 1 -3 0 -3 0 -3 0 -1 18 0 38 0 0 96 -4 0 -1 0 0 -1 -2 -1 0 0 0 -1 -2 0 0 1 0 2 -1 0 -1 0 -1 0 0 -72 -48 0 0 75 0 6 -14 10 0 0 0 -91 -47 0 0 90 -15 0 0 -90 -46 0 0 90 -12 0 0 -114zm130 40l1 0 0 3 0 3 1 2 1 1 1 2 0 2 0 3 -1 1 0 2 -1 2 -1 1 0 2 -1 0 -1 -2 -1 -1 0 -3 -1 -3 0 -1 0 -1 0 -1 0 -2 2 -2 0 -2 1 -2 0 -3 0 -1zm57 0l1 0 0 2 0 4 1 1 1 2 0 1 1 1 1 1 0 1 -1 1 0 1 -1 2 0 1 1 1 -2 0 0 2 0 1 -1 1 0 1 0 1 -1 -1 0 -1 -1 -2 -1 -1 0 -2 0 -3 -1 -1 0 -1 0 -1 0 -1 1 -1 1 -2 0 -3 0 -3 1 -1 0 -1z"]);
    wall2 = s.path(["M102 178l16 0 0 0 39 -1 0 -4 84 -1 1 5 38 0 1 0 15 0 0 95 -12 0 -1 0 -38 0 -1 -2 -1 -1 -89 0 -1 1 0 2 -37 0 -2 0 0 1 -12 0 0 -95zm147 8l23 0 0 4 -2 0 -1 67 -18 0 0 -67 -2 0 0 -4zm-84 -3l66 0 0 2 0 4 0 66 -66 -1 0 -71zm-39 4l23 0 0 3 -2 0 -1 68 -19 0 0 -66 0 -2 -1 0 0 -3z"]);
    wall3 = s.polygon(["101,150 102,132 101,131 100,129 100,127 100,126 102,125 115,125 115,125 157,124 159,121 160,120 159,116 157,116 157,86 183,86 241,86 241,115 239,116 239,118 239,119 239,120 240,122 241,124 242,125 281,124 283,124 283,125 298,125 298,128 297,130 297,132 296,133 296,148 250,148 250,143 231,143 231,95 167,95 167,143 226,143 149,144 149,149"]);
    wall = s.group(wall1, wall2, wall3);
    
    roof = s.polygon(["136,50 255,50 259,60 262,65 269,76 277,88 284,101 290,109 294,112 298,116 241,115 240,85 244,86 246,80 246,76 246,74 248,71 248,68 248,66 191,66 151,67 150,68 150,70 151,74 151,77 152,83 153,84 153,86 154,88 154,89 157,89 157,116 99,116 101,116 106,112 112,102 117,93 123,80 128,69 133,57 136,53"]);
    
    arhElem1 = s.path(["M100 403l13 0 1 -90 46 0 0 90 15 0 0 -90 47 0 0 90 14 0 0 -90 48 0 0 106 -183 -1 0 -2 -1 0 0 -3 1 1 0 -9 -1 0 0 -2zm174 10l0 -94 -29 0 -1 93 30 1zm-93 -94l34 0 0 82 -34 0 0 -82zm-62 0l35 0 0 82 -34 0 -1 -82z"]);
    arhElem2 = s.polygon(["300,272 300,274 299,275 299,277 297,277 298,283 297,283 297,289 240,289 240,293 239,296 239,299 231,298 231,293 230,292 230,290 229,289 216,289 216,291 215,294 215,296 215,299 206,299 206,297 206,294 206,291 206,289 206,289 192,289 191,289 191,291 191,294 191,297 191,299 182,299 182,296 182,294 182,292 182,290 181,289 167,289 167,292 167,294 167,297 167,299 158,299 158,296 158,292 158,290 157,288 101,289 101,288 101,283 101,282 100,278 100,277 99,275 98,273 114,273 114,272 116,272 117,272 138,272 152,272 153,272 153,270 154,269 158,269 183,269 209,269 242,269 244,269 245,270 245,272 272,272 283,272 284,272"]); 
    arhElem3 = s.polygon(["93,150 148,149 149,144 250,143 250,148 305,148 305,152 304,153 298,166 297,168 297,170 297,177 260,177 242,177 241,172 192,172 157,173 157,178 118,178 118,178 102,178 102,175 98,165 "]); 
    arhElem4 = s.polygon(["157,86 241,86 242,85 244,85 244,84 246,84 246,81 246,80 246,75 247,74 247,70 248,70 248,69 151,69 151,75 152,75 152,78 152,80 152,83 152,85 154,85 154,87 157,87 "]); 
    arhElem = s.group(arhElem1, arhElem2, arhElem3, arhElem4);

   // door = s.polygon(["244,342 274,342 274,413 244,413 "]);

    wall.addClass("wall");
    roof.addClass("roof");
    arhElem.addClass("arhElem");
   // door.addClass("door");

    $(".color-selector").click(function(){
      $(".color-selector").removeClass("active");
      $(this).addClass("active");
    });


    $(".ColorComparisonSmallColor").click(function() {
        colorSelect = $(this).css('background-color');
        rgbArray = colorSelect.substr(4, colorSelect.length-5).split(', ');
        hslColor = rgb2hsl(rgbArray);
        console.log(hslColor);
        elementForColor = $(".color-selector.active").attr("data");
        $(".btn-"+elementForColor).css("border-bottom","4px solid "+colorSelect);
        elementForColor ? $("."+elementForColor).css("fill", hslColor) : console.log("none");
    });


}


/*
* Converts an RGB color to HSL
* Parameters
*     rgbArr : 3-element array containing the RGB values
*
* Result : 3-element array containing the HSL values
*
*/
function rgb2hsl(rgbArr){
    var r1 = rgbArr[0] / 255;
    var g1 = rgbArr[1] / 255;
    var b1 = rgbArr[2] / 255;
 
    var maxColor = Math.max(r1,g1,b1);
    var minColor = Math.min(r1,g1,b1);
    //Calculate L:
    var L = (maxColor + minColor) / 2 ;
    var S = 0;
    var H = 0;
    if(maxColor != minColor){
        //Calculate S:
        if(L < 0.5){
            S = (maxColor - minColor) / (maxColor + minColor);
        }else{
            S = (maxColor - minColor) / (2.0 - maxColor - minColor);
        }
        //Calculate H:
        if(r1 == maxColor){
            H = (g1-b1) / (maxColor - minColor);
        }else if(g1 == maxColor){
            H = 2.0 + (b1 - r1) / (maxColor - minColor);
        }else{
            H = 4.0 + (r1 - g1) / (maxColor - minColor);
        }
    }
 
    
    
    H = H * 60;
    if(H<0){
        H += 360;
    }
    S = S * 100;
    L =  L < 0.85 ? L * 100 : L * 100;
    
    var result = [H, S, L];
   // return result;
    return "hsl("+H+","+S+"%,"+L+"%)";
}
    
    
