function processDirData(dirData){


  // enrich data by loading html content from files
  dirData.forEach(function(item){
    if(item.children){
        processDirData(item.children);
    }
    if(item.path.indexOf('.html')>=0){
        htmlFilesLeftToLoad++;
        $.get(
            "/mybuildings/wp-content/uploads/buildings" + item.path,
            function(data){
              item.html = data;
              htmlFilesLeftToLoad--;
              if(htmlFilesLeftToLoad===0){
                // everything is loaded
                startRendering();
              }
            }
        );
    }
  });

}

function startRendering(){
    console.log(JSON.stringify(dirData,"","  "));
}


function waitForjQueryAndStartUp(){
  if(!window.jQuery){
    setTimeout(waitForjQueryAndStartUp,100);
    return;
  }
  window.$ = window.jQuery;

  window.htmlFilesLeftToLoad = 0;
  processDirData(dirData,startRendering);
}
waitForjQueryAndStartUp();
