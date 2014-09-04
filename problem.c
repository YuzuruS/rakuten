#include<stdio.h> 

unsigned long int a(int n){ 
    int i; 
    unsigned long int b[100]; 
    b[0]=1; 
    b[1]=2; 
    b[2]=4; 

    for (i=3;i<n;i++){ 
        b[i]=b[i-1]+b[i-2]+b[i-3]; 
    } 

    return b[n-1]; 

} 

int main(){ 
    printf("%lu\n",a(100)); 
    return 0; 
}
