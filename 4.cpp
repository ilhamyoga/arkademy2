#include <iostream>
using namespace std;

void cetak_gambar(int a){
	if(a%2==1){
    	for (int x=0;x<a;x++){
        	for (int y=0;y<a;y++){
            	if (x==0||x==a-1||y==(a/2)){
                	cout<<"x";
            	}
				else{
                	cout<<"=";
            	}
            	if(y!=a){
            		cout<<" ";	
				}
        	}
			cout <<"\n";
    	}
	}
}

int main(){
    int a;
    cin>>a;
	cetak_gambar(a);
	return 0;
}
