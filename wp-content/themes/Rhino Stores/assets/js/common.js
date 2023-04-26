$(window).on("load", function() {
    $(".preloader").hide();    
});

function openTips(tipsName){
    var previousTipDisplay = $("#currentTipDisplay").val();
    $("#main-tip-section").hide();
    if(previousTipDisplay != tipsName && previousTipDisplay != ''){        
        $("#"+previousTipDisplay).hide();
        $("#"+tipsName).show();        
    }else{        
        $("#"+tipsName).show();
    } 
    $("#currentTipDisplay").val(tipsName);
}

function goBackTips(){
    var previousTipDisplay = $("#currentTipDisplay").val();
    $("#main-tip-section").show();
    $("#"+previousTipDisplay).hide();    
}

function rhinoSearch(){
    var searchbox = $("#searchbox").val();
    var hostURL = window.location.hostname;    
    
    var redirectSearchURL = '';
    if(searchbox){
        if(hostURL == "localhost"){
            hostURL = 'http://'+hostURL+'/rhino-stores';
        }
        redirectSearchURL = 'http://'+hostURL+'?s='+searchbox;        
        window.location.href = redirectSearchURL;
        
    }
}