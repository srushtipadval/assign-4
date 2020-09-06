$("document").ready(function(){
            
    let url="https://reconciled-blaze.000webhostapp.com/restaurant.php?req=menulist";
    $.get(url,function(data,success){
        
        for (const item in data) {
                let opt=document.createElement("option");
                opt.textContent=data[item];
                opt.value=item;
                document.querySelector('#item').appendChild(opt);
            }
    });
    
});

document.querySelector('#demo1').addEventListener('click',getItemDetail);


let base_url = "https://reconciled-blaze.000webhostapp.com/restaurant.php";

function getItemDetail(){
    document.querySelector('#disp').innerHTML="";
    let item_name=document.querySelector('#item').value;
    let url=base_url+"?req=menudetail&name="+item_name;
    console.log(url);
    $.get(url,function(item,success){
        for (key in item) {
            if(item[key]!=null){
                let op1=document.createElement("dt");
                op1.className="col-6";
                text=key.replace(/_/g," ")
                op1.textContent=text.toUpperCase();
                document.querySelector('#disp').appendChild(op1);
                let op2=document.createElement("dd");
                op2.className="col-6";
                op2.textContent=item[key];
                if(key=='price_small' || key=='price_large'){
                    op2.textContent=item[key]+" $";
                }
                else
                {
                    op2.textContent=item[key];
                }
                document.querySelector('#disp').appendChild(op2);
            }
        }
    });
}