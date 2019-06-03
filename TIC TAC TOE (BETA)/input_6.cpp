#include "input_6.h"
#include <iostream>

using namespace std;


input_6::input_6()
{
  //ctor
}

int o6;

void input_6::box_6()
{

  cout<<"   |   |   "<<endl;
  cout<<" X |   |   "<<endl;
  cout<<"___|___|___"<<endl;
  cout<<"   |   |   "<<endl;
  cout<<"   |   | O "<<endl;
  cout<<"___|___|___"<<endl;
  cout<<"   |   |   "<<endl;
  cout<<"   |   | X "<<endl;
  cout<<"   |   |   "<<endl;
  cout<<endl;
  cout<<"Computer has put in 9\nYour Turn"<<endl;
  cin>>o6;
if(o6==3)
{

  cout<<"   |   |   "<<endl;
  cout<<" X |   | O "<<endl;
  cout<<"___|___|___"<<endl;
  cout<<"   |   |   "<<endl;
  cout<<"   | X | O "<<endl;
  cout<<"___|___|___"<<endl;
  cout<<"   |   |   "<<endl;
  cout<<"   |   | X "<<endl;
  cout<<"   |   |   "<<endl;
  cout<<endl;
  cout<<"Computer has put in 5"<<endl;
  cout<<"Computer wins"<<endl;


}

else if(o6==2)
{

  cout<<"   |   |   "<<endl;
  cout<<" X | O |   "<<endl;
  cout<<"___|___|___"<<endl;
  cout<<"   |   |   "<<endl;
  cout<<"   | X | O "<<endl;
  cout<<"___|___|___"<<endl;
  cout<<"   |   |   "<<endl;
  cout<<"   |   | X "<<endl;
  cout<<"   |   |   "<<endl;
  cout<<endl;
  cout<<"Computer has put in 5"<<endl;
  cout<<"Computer wins"<<endl;


}

else if(o6==7)
{

  cout<<"   |   |   "<<endl;
  cout<<" X |   |   "<<endl;
  cout<<"___|___|___"<<endl;
  cout<<"   |   |   "<<endl;
  cout<<"   | X | O "<<endl;
  cout<<"___|___|___"<<endl;
  cout<<"   |   |   "<<endl;
  cout<<" O |   | X "<<endl;
  cout<<"   |   |   "<<endl;
  cout<<endl;
  cout<<"Computer has put in 5"<<endl;
  cout<<"Computer wins"<<endl;


}

else if(o6==8)
{

  cout<<"   |   |   "<<endl;
  cout<<" X |   |   "<<endl;
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

else if(o6==4)
{

  cout<<"   |   |   "<<endl;
  cout<<" X |   |   "<<endl;
  cout<<"___|___|___"<<endl;
  cout<<"   |   |   "<<endl;
  cout<<" O | X | O "<<endl;
  cout<<"___|___|___"<<endl;
  cout<<"   |   |   "<<endl;
  cout<<"   |   | X "<<endl;
  cout<<"   |   |   "<<endl;
  cout<<endl;
  cout<<"Computer has put in 5"<<endl;
  cout<<"Computer wins"<<endl;


}

else if(o6==5)
{
    cout<<"   |   |   "<<endl;
    cout<<" X |   |   "<<endl;
    cout<<"___|___|___"<<endl;
    cout<<"   |   |   "<<endl;
    cout<<" X | O | O "<<endl;
    cout<<"___|___|___"<<endl;
    cout<<"   |   |   "<<endl;
    cout<<"   |   | X "<<endl;
    cout<<"   |   |   "<<endl;
    cout<<endl;
    cout<<"Computer has put in 4"<<endl;
    cout<<"Your turn"<<endl;
    cin>>o6;

    if(o6==2)
    {
      cout<<"   |   |   "<<endl;
      cout<<" X | O |   "<<endl;
      cout<<"___|___|___"<<endl;
      cout<<"   |   |   "<<endl;
      cout<<" X | O | O "<<endl;
      cout<<"___|___|___"<<endl;
      cout<<"   |   |   "<<endl;
      cout<<" X |   | X "<<endl;
      cout<<"   |   |   "<<endl;
      cout<<endl;
      cout<<"Computer has put in 7"<<endl;
      cout<<"Computer wins"<<endl;
    }

    else if(o6==3)
    {

      cout<<"   |   |   "<<endl;
      cout<<" X |   | O "<<endl;
      cout<<"___|___|___"<<endl;
      cout<<"   |   |   "<<endl;
      cout<<" X | O | O "<<endl;
      cout<<"___|___|___"<<endl;
      cout<<"   |   |   "<<endl;
      cout<<" X |   | X "<<endl;
      cout<<"   |   |   "<<endl;
      cout<<endl;
      cout<<"Computer has put in 7"<<endl;
      cout<<"Computer wins"<<endl;


    }

    else if(o6==8)
    {

      cout<<"   |   |   "<<endl;
      cout<<" X |   |   "<<endl;
      cout<<"___|___|___"<<endl;
      cout<<"   |   |   "<<endl;
      cout<<" X | O | O "<<endl;
      cout<<"___|___|___"<<endl;
      cout<<"   |   |   "<<endl;
      cout<<" X | O | X "<<endl;
      cout<<"   |   |   "<<endl;
      cout<<endl;
      cout<<"Computer has put in 7"<<endl;
      cout<<"Computer wins"<<endl;


    }

    else if(o6==7)
    {

      cout<<"   |   |   "<<endl;
      cout<<" X |   | X "<<endl;
      cout<<"___|___|___"<<endl;
      cout<<"   |   |   "<<endl;
      cout<<" X | O | O "<<endl;
      cout<<"___|___|___"<<endl;
      cout<<"   |   |   "<<endl;
      cout<<" O |   | X "<<endl;
      cout<<"   |   |   "<<endl;
      cout<<endl;
      cout<<"Computer has put in 3"<<endl;
      cout<<"Your turn"<<endl;
      cin>>o6;

    if(o6==8)
      {

      cout<<"   |   |   "<<endl;
      cout<<" X | X | X "<<endl;
      cout<<"___|___|___"<<endl;
      cout<<"   |   |   "<<endl;
      cout<<" X | O | O "<<endl;
      cout<<"___|___|___"<<endl;
      cout<<"   |   |   "<<endl;
      cout<<" O | O | X "<<endl;
      cout<<"   |   |   "<<endl;
      cout<<endl;
      cout<<"Computer has put in 2\Computer Wins"<<endl;
      }

    else if(o6==2)
      {

      cout<<"   |   |   "<<endl;
      cout<<" X | O | X "<<endl;
      cout<<"___|___|___"<<endl;
      cout<<"   |   |   "<<endl;
      cout<<" X | O | O "<<endl;
      cout<<"___|___|___"<<endl;
      cout<<"   |   |   "<<endl;
      cout<<" O | X | X "<<endl;
      cout<<"   |   |   "<<endl;
      cout<<endl;
      cout<<"Computer has put in 8\nThe Game ends as a Draw"<<endl;
      }


    }




}

























}
