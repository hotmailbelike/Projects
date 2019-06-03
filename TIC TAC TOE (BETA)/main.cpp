#include "input_2.h"
#include "input_3.h"
#include "input_4.h"
#include "input_5.h"
#include "input_6.h"
#include "input_7.h"
#include "input_8.h"
#include "input_9.h"

#include <iostream>

using namespace std;


int main()
{

cout<<"   TIC TAC TOE   "<<endl;
cout<<endl;


//cout<<"		|		|      "<<endl;
//cout<<" 1 | 2 |	3    "<<endl;
//cout<<"___|___|_____ "<<endl;
//cout<<"		|		|			 "<<endl;
//cout<<"		|   |			 "<<endl;
//cout<<"___|___|_____ "<<endl;
//cout<<"   |   |			 "<<endl;
//cout<<"		|		|		   "<<endl;
//cout<<"		|		|      "<<endl;

cout<<"   |   |   "<<endl;
cout<<" 1 | 2 | 3 "<<endl;
cout<<"___|___|___"<<endl;
cout<<"   |   |   "<<endl;
cout<<" 4 | 5 | 6 "<<endl;
cout<<"___|___|___"<<endl;
cout<<"   |   |   "<<endl;
cout<<" 7 | 8 | 9 "<<endl;
cout<<"   |   |   "<<endl;

cout<<endl;

int o;
//int x;
char nx='k';

cout<<"Choose between 1-9 to fill up one of the squares with a 'O'\n"<<endl;


while(nx!='q'){

cout<<"Computer went 1st and computer has put 'X' on '1'\n"<<endl;

cout<<"   |   |   "<<endl;
cout<<" X |   |   "<<endl;
cout<<"___|___|___"<<endl;
cout<<"   |   |   "<<endl;
cout<<"   |   |   "<<endl;
cout<<"___|___|___"<<endl;
cout<<"   |   |   "<<endl;
cout<<"   |   |   "<<endl;
cout<<"   |   |   "<<endl;

cout<<endl;
cout<<"Your turn"<<endl;
cin>>o;


if(o==1) cout<<"Error, that spot is taken"<<endl;

else if(o==2)
{

input_2 in2;

in2.box_2();

cout<<"\n\n"<<endl;
cout<<"Would you like to play again?"<<endl;
cout<<"Press 'q' to quit or press any other key to restart"<<endl;
cin>>nx;
if(nx=='q') cout<<"\nThank you for playing!"<<endl;
cout<<"\n\n"<<endl;
}

else if(o==3)
{

input_3 in3;

in3.box_3();
cout<<"\n\n"<<endl;

cout<<"Would you like to play again?"<<endl;
cout<<"Press 'q' to quit or press any other key to restart"<<endl;
cin>>nx;
if(nx=='q') cout<<"\nThank you for playing!"<<endl;
cout<<"\n\n"<<endl;


}

else if(o==4)
{

input_4 in4;
in4.box_4();
cout<<"\n\n"<<endl;

cout<<"Would you like to play again?"<<endl;
cout<<"Press 'q' to quit or press any other key to restart"<<endl;
cin>>nx;
if(nx=='q') cout<<"\nThank you for playing!"<<endl;
cout<<"\n\n"<<endl;

}

else if(o==5)
{

input_5 in5;
in5.box_5();
cout<<"\n\n"<<endl;

cout<<"Would you like to play again?"<<endl;
cout<<"Press 'q' to quit or press any other key to restart"<<endl;
cin>>nx;
if(nx=='q') cout<<"\nThank you for playing!"<<endl;
cout<<"\n\n"<<endl;

}

else if(o==6)
{

input_6 in6;
in6.box_6();
cout<<"\n\n"<<endl;

cout<<"Would you like to play again?"<<endl;
cout<<"Press 'q' to quit or press any other key to restart"<<endl;
cin>>nx;
if(nx=='q') cout<<"\nThank you for playing!"<<endl;
cout<<"\n\n"<<endl;

}

else if(o==7)
{

input_7 in7;
in7.box_7();
cout<<"\n\n"<<endl;

cout<<"Would you like to play again?"<<endl;
cout<<"Press 'q' to quit or press any other key to restart"<<endl;
cin>>nx;
if(nx=='q') cout<<"\nThank you for playing!"<<endl;
cout<<"\n\n"<<endl;

}

else if(o==8)
{

input_8 in8;
in8.box_8();
cout<<"\n\n"<<endl;

cout<<"Would you like to play again?"<<endl;
cout<<"Press 'q' to quit or press any other key to restart"<<endl;
cin>>nx;
if(nx=='q') cout<<"\nThank you for playing!"<<endl;
cout<<"\n\n"<<endl;

}

else if(o==9)
{

input_9 in9;
in9.box_9();
cout<<"\n\n"<<endl;

cout<<"Would you like to play again?"<<endl;
cout<<"Press 'q' to quit or press any other key to restart"<<endl;
cin>>nx;
if(nx=='q') cout<<"\nThank you for playing!"<<endl;
cout<<"\n\n"<<endl;

}

else
{
  cout<<"\n\n"<<endl;

  cout<<"Error, Please enter only between 2 and 9"<<endl;

  cout<<"Try again?"<<endl;
  cout<<"Press 'q' to quit or press any other key to restart"<<endl;
  cin>>nx;
  if(nx=='q') cout<<"\nThank you for playing!"<<endl;
  cout<<"\n\n"<<endl;

}

}


//else if(o==2)
//{
//  cout<<"   |   |   "<<endl;
//  cout<<" X | O |   "<<endl;
//  cout<<"___|___|___"<<endl;
//  cout<<"   |   |   "<<endl;
//  cout<<"   |   |   "<<endl;
//  cout<<"___|___|___"<<endl;
//  cout<<"   |   |   "<<endl;
//  cout<<"   |   | X "<<endl;
//  cout<<"   |   |   "<<endl;
//  cout<<endl;
//  cout<<"Computer has put in 9"<<endl;
//
//}


return 0;
}
