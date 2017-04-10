#include<iostream>
#include<conio.h>
using namespace std;
int main(){
int years,countt;
double balance,rate;
cout<<"enter the  of your account";
cin>>years;
cout<<"enter the ballance of your account";
cin>>balance;
cout<<"enter the rate";
cin>>rate;
countt=1;
while(countt<=years){
    balance*=rate;
    cout<<countt<<":"<<balance<<endl;
    ++countt;

}
cout<<"after"<<years<<"yers your account will be"<<balance<<".."<<endl;
return 0;



}
