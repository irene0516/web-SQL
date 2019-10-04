//var netPrice=8.99;
//alert(netPrice);
//alert(document.title);
//var a=100;
//var b=(a*9)/5+32;
//document.write(b);
function doThis(){
    alert("Doing this");
}
function doThat(){
    alert("Doing that");
}
function cube(x){
    alert(x * x * x);
}
function times(a,b){
    alert(a*b);
}
function c(a){
    var b=a*9/5+32;
    return b;
}
function time(){
//    var myday=new Date(); document.write(myday.toDateString()+"+"+myday.toTimeString()+"<br>");
//    myday.setDate(myday.getDate()+1); document.write(myday.toDateString()+"+"+myday.toTimeString());
    var out="";
    var myday=new Date();
    out+="<br>date"+myday.getDate();
    out+="<br>Month"+myday.getMonth();
    out+="<br>Year"+myday.getFullYear();
    out+="<br>Hours"+myday.getHours();
    out+="<br>second"+myday.getSeconds();
    document.write(out);
    
}
function fake(input){
   var a=input.toLowerCase();
   if(a.indexOf("fake")<0){
       return false;
   }  return true;
}
function wrangleArray(){
    var sentence="JavaScript is a really cool language";
    var newSentance="";
    document.getElementById("div1").innerHTML="<p>"+sentence+"</p>";
    var words=sentence.split(" ");
    var message=words.splice(3,2,"powerful");
    alert("removed words:"+message);
    document.getElementById("div2").innerHTML="<p>"+words.join(" ")+"</p>";
    
}
//myNewObject=new Object();
//myNewObject.info="123456789";
//function myfunc(){
//    alert(this.info);
//}
//myNewObject.showinfo=myfunc;
//myNewObject.showinfo();
//myNewObject.func=function(){
//    alert(this.info);
//}
//function Person(personName){
//    this.name=personName;
//    this.info="name:"+this.name;
//    this.showInfo=function(){
//        alert(this.info);
//    }   
//}
//var person1=new Person("Adam");
//    var person2=new Person("Eve");
//    Person.prototype.sayHello=function(){
//        alert(this.name+"sayHello");
//    }

String.prototype.backwards=function(){
    var out="";
    for(var i=this.length-1;i>=0;i--){
        out+=this.substr(i,1);
    }
    return out;
}
function countListItems(){
    var olElement=document.getElementById("toDoList");
    var count=0;
    for(var i=0;i<olElement.childNodes.length;i++){
        if(olElement.childNodes[i].nodeType==1) count++;
    }
    alert(count);
    window.onload=countListItems;
}