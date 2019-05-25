#include <iostream>
#include <string.h>

using namespace std;

void myCountChar(char a[100]){
	int x=0;
	for(int i=0; i<strlen(a); i++){
		if(a[i]=='a'||a[i]=='i'||a[i]=='u'||a[i]=='e'||a[i]=='o'||a[i]=='A'||a[i]=='I'||a[i]=='U'||a[i]=='E'||a[i]=='O'){
			x += 1;
 		}
	}
	cout<<x;
}

int main(){
	char a[100];
	cin.getline(a,100);
	myCountChar(a);
	return 0;
}
