#include "input_8.h"

#include <iostream>

using namespace std;

input_8::input_8()
{
  //ctor
}

int o8;

void input_8::box_8()
{

  cout<<"   |   |   "<<endl;
  cout<<" X |   |   "<<endl;
  cout<<"___|___|___"<<endl;
  cout<<"   |   |   "<<endl;
  cout<<"   |   |   "<<endl;
  cout<<"___|___|___"<<endl;
  cout<<"   |   |   "<<endl;
  cout<<"   | O | X "<<endl;
  cout<<"   |   |   "<<endl;
  cout<<endl;
  cout<<"Computer has put in 9\nYour Turn"<<endl;
  cin>>o8;

if(o8==3)
  {
    cout<<"   |   |   "<<endl;
    cout<<" X |   | O "<<endl;
    cout<<"___|___|___"<<endl;
    cout<<"   |   |   "<<endl;
    cout<<"   | X |   "<<endl;
    cout<<"___|___|___"<<endl;
    cout<<"   |   |   "<<endl;
    cout<<"   | O | X "<<endl;
    cout<<"   |   |   "<<endl;
    cout<<endl;
    cout<<"Computer has put in 5"<<endl;
    cout<<"Computer wins"<<endl;

  }

else if(o8==4)
  {
    cout<<"   |   |   "<<endl;
    cout<<" X |   |   "<<endl;
    cout<<"___|___|___"<<endl;
    cout<<"   |   |   "<<endl;
    cout<<" O | X |   "<<endl;
    cout<<"___|___|___"<<endl;
    cout<<"   |   |   "<<endl;
    cout<<"   | O | X "<<endl;
    cout<<"   |   |   "<<endl;
    cout<<endl;
    cout<<"Computer has put in 5"<<endl;
    cout<<"Computer wins"<<endl;

  }

else if(o8==5)
  {
    cout<<"   |   |   "<<endl;
    cout<<" X | X |   "<<endl;
    cout<<"___|___|___"<<endl;
    cout<<"   |   |   "<<endl;
    cout<<"   | O |   "<<endl;
    cout<<"___|___|___"<<endl;
    cout<<"   |   |   "<<endl;
    cout<<"   | O | X "<<endl;
    cout<<"   |   |   "<<endl;
    cout<<endl;
    cout<<"Computer has put in 2\nYour Turn"<<endl;
    cin>>o8;

    if(o8==7)
    {
    cout<<"   |   |   "<<endl;
    cout<<" X | X | X "<<endl;
    cout<<"___|___|___"<<endl;
    cout<<"   |   |   "<<endl;
    cout<<"   | O |   "<<endl;
    cout<<"___|___|___"<<endl;
    cout<<"   |   |   "<<endl;
    cout<<" O | O | X "<<endl;
    cout<<"   |   |   "<<endl;
    cout<<endl;
    cout<<"Computer has put in 3"<<endl;
    cout<<"Computer wins"<<endl;


    }

    else if(o8==4)
    {

    cout<<"   |   |   "<<endl;
    cout<<" X | X | X "<<endl;
    cout<<"___|___|___"<<endl;
    cout<<"   |   |   "<<endl;
    cout<<" O | O |   "<<endl;
    cout<<"___|___|___"<<endl;
    cout<<"   |   |   "<<endl;
    cout<<"   | O | X "<<endl;
    cout<<"   |   |   "<<endl;
    cout<<endl;
    cout<<"Computer has put in 3"<<endl;
    cout<<"Computer wins"<<endl;


    }

    else if(o8==6)
    {

    cout<<"   |   |   "<<endl;
    cout<<" X | X | X "<<endl;
    cout<<"___|___|___"<<endl;
    cout<<"   |   |   "<<endl;
    cout<<"   | O | O "<<endl;
    cout<<"___|___|___"<<endl;
    cout<<"   |   |   "<<endl;
    cout<<"   | O | X "<<endl;
    cout<<"   |   |   "<<endl;
    cout<<endl;
    cout<<"Computer has put in 3"<<endl;
    cout<<"Computer wins"<<endl;

    }

    else if(o8==3)
    {

    cout<<"   |   |   "<<endl;
    cout<<" X | X | O "<<endl;
    cout<<"___|___|___"<<endl;
    cout<<"   |   |   "<<endl;
    cout<<"   | O |   "<<endl;
    cout<<"___|___|___"<<endl;
    cout<<"   |   |   "<<endl;
    cout<<" X | O | X "<<endl;
    cout<<"   |   |   "<<endl;
    cout<<endl;
    cout<<"Computer has put in 7"<<endl;
    cout<<"Your turn"<<endl;
    cin>>o8;

    if(o8==4)
      {

      cout<<"   |   |   "<<endl;
      cout<<" X | X | O "<<endl;
      cout<<"___|___|___"<<endl;
      cout<<"   |   |   "<<endl;
      cout<<" O | O | X "<<endl;
      cout<<"___|___|___"<<endl;
      cout<<"   |   |   "<<endl;
      cout<<" X | O | X "<<endl;
      cout<<"   |   |   "<<endl;
      cout<<endl;
      cout<<"Computer has put in 6"<<endl;
      cout<<"The game is a draw"<<endl;
      }

    else if(o8==6)
      {

      cout<<"   |   |   "<<endl;
      cout<<" X | X | O "<<endl;
      cout<<"___|___|___"<<endl;
      cout<<"   |   |   "<<endl;
      cout<<" X | O | O "<<endl;
      cout<<"___|___|___"<<endl;
      cout<<"   |   |   "<<endl;
      cout<<" X | O | X "<<endl;
      cout<<"   |   |   "<<endl;
      cout<<endl;
      cout<<"Computer has put in 4"<<endl;
      cout<<"Computer wins"<<endl;
      }


    }

  }

else if(o8==6)
  {
    cout<<"   |   |   "<<endl;
    cout<<" X |   |  "<<endl;
    cout<<"___|___|___"<<endl;
    cout<<"   |   |   "<<endl;
    cout<<"   | X | O "<<endl;
    cout<<"___|___|___"<<endl;
    cout<<"   |   |   "<<endl;
    cout<<"   | O | X "<<endl;
    cout<<"   |   |   "<<endl;
    cout<<endl;
    cout<<"Computer has put in 5"<<endl;
    cout<<"Computer wins"<<endl;

  }

else if(o8==7)
  {
    cout<<"   |   |   "<<endl;
    cout<<" X |   |   "<<endl;
    cout<<"___|___|___"<<endl;
    cout<<"   |   |   "<<endl;
    cout<<"   | X |   "<<endl;
    cout<<"___|___|___"<<endl;
    cout<<"   |   |   "<<endl;
    cout<<" O | O | X "<<endl;
    cout<<"   |   |   "<<endl;
    cout<<endl;
    cout<<"Computer has put in 5"<<endl;
    cout<<"Computer wins"<<endl;

  }

else if(o8==2)
  {
    cout<<"   |   |   "<<endl;
    cout<<" X | O |   "<<endl;
    cout<<"___|___|___"<<endl;
    cout<<"   |   |   "<<endl;
    cout<<"   | X |   "<<endl;
    cout<<"___|___|___"<<endl;
    cout<<"   |   |   "<<endl;
    cout<<"   | O | X "<<endl;
    cout<<"   |   |   "<<endl;
    cout<<endl;
    cout<<"Computer has put in 5"<<endl;
    cout<<"Computer wins"<<endl;

  }














































}
