#include "input_2.h"

#include <iostream>

using namespace std;

input_2::input_2()
{


}

int o;

void input_2::box_2()
{


    cout<<"   |   |   "<<endl;
    cout<<" X | O |   "<<endl;
    cout<<"___|___|___"<<endl;
    cout<<"   |   |   "<<endl;
    cout<<"   |   |   "<<endl;
    cout<<"___|___|___"<<endl;
    cout<<"   |   |   "<<endl;
    cout<<"   |   | X "<<endl;
    cout<<"   |   |   "<<endl;
    cout<<endl;

    cout<<"Computer has put in 9"<<endl;
    cout<<"Your turn"<<endl;
    cin>>o;

if(o==3)
  {
    cout<<"   |   |   "<<endl;
    cout<<" X | O | O "<<endl;
    cout<<"___|___|___"<<endl;
    cout<<"   |   |   "<<endl;
    cout<<"   | X |   "<<endl;
    cout<<"___|___|___"<<endl;
    cout<<"   |   |   "<<endl;
    cout<<"   |   | X "<<endl;
    cout<<"   |   |   "<<endl;
    cout<<endl;
    cout<<"Computer has put in 5"<<endl;
    cout<<"Computer wins"<<endl;

  }

else if(o==4)
  {
    cout<<"   |   |   "<<endl;
    cout<<" X | O |   "<<endl;
    cout<<"___|___|___"<<endl;
    cout<<"   |   |   "<<endl;
    cout<<" O | X |   "<<endl;
    cout<<"___|___|___"<<endl;
    cout<<"   |   |   "<<endl;
    cout<<"   |   | X "<<endl;
    cout<<"   |   |   "<<endl;
    cout<<endl;
    cout<<"Computer has put in 5"<<endl;
    cout<<"Computer wins"<<endl;

  }

else if(o==5)
  {
    cout<<"   |   |   "<<endl;
    cout<<" X | O |   "<<endl;
    cout<<"___|___|___"<<endl;
    cout<<"   |   |   "<<endl;
    cout<<"   | O |   "<<endl;
    cout<<"___|___|___"<<endl;
    cout<<"   |   |   "<<endl;
    cout<<"   | X | X "<<endl;
    cout<<"   |   |   "<<endl;
    cout<<endl;
    cout<<"Computer has put in 8"<<endl;
    cout<<"Your turn"<<endl;
    cin>>o;

    if(o==3)
    {
    cout<<"   |   |   "<<endl;
    cout<<" X | O | O "<<endl;
    cout<<"___|___|___"<<endl;
    cout<<"   |   |   "<<endl;
    cout<<"   | O |   "<<endl;
    cout<<"___|___|___"<<endl;
    cout<<"   |   |   "<<endl;
    cout<<" X | X | X "<<endl;
    cout<<"   |   |   "<<endl;
    cout<<endl;
    cout<<"Computer has put in 7"<<endl;
    cout<<"Computer wins"<<endl;


    }

    else if(o==4)
    {

    cout<<"   |   |   "<<endl;
    cout<<" X | O |   "<<endl;
    cout<<"___|___|___"<<endl;
    cout<<"   |   |   "<<endl;
    cout<<" O | O |   "<<endl;
    cout<<"___|___|___"<<endl;
    cout<<"   |   |   "<<endl;
    cout<<" X | X | X "<<endl;
    cout<<"   |   |   "<<endl;
    cout<<endl;
    cout<<"Computer has put in 7"<<endl;
    cout<<"Computer wins"<<endl;


    }

    else if(o==6)
    {

    cout<<"   |   |   "<<endl;
    cout<<" X | O |   "<<endl;
    cout<<"___|___|___"<<endl;
    cout<<"   |   |   "<<endl;
    cout<<"   | O | O "<<endl;
    cout<<"___|___|___"<<endl;
    cout<<"   |   |   "<<endl;
    cout<<" X | X | X "<<endl;
    cout<<"   |   |   "<<endl;
    cout<<endl;
    cout<<"Computer has put in 7"<<endl;
    cout<<"Computer wins"<<endl;


    }

    else if(o==7)
    {

    cout<<"   |   |   "<<endl;
    cout<<" X | O | X "<<endl;
    cout<<"___|___|___"<<endl;
    cout<<"   |   |   "<<endl;
    cout<<"   | O |   "<<endl;
    cout<<"___|___|___"<<endl;
    cout<<"   |   |   "<<endl;
    cout<<" O | X | X "<<endl;
    cout<<"   |   |   "<<endl;
    cout<<endl;
    cout<<"Computer has put in 3"<<endl;
    cout<<"Your turn"<<endl;
    cin>>o;

    if(o==4)
    {

    cout<<"   |   |   "<<endl;
    cout<<" X | O | X "<<endl;
    cout<<"___|___|___"<<endl;
    cout<<"   |   |   "<<endl;
    cout<<" O | O | X "<<endl;
    cout<<"___|___|___"<<endl;
    cout<<"   |   |   "<<endl;
    cout<<" O | X | X "<<endl;
    cout<<"   |   |   "<<endl;
    cout<<endl;
    cout<<"Computer has put in 6"<<endl;
    cout<<"Computer Wins"<<endl;
    }

    else if(o==6)
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
    cout<<"Computer has put in 4"<<endl;
    cout<<"The game is a draw"<<endl;
    }


    }

  }

else if(o==6)
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
    cout<<"Computer has put in 5\nComputer wins"<<endl;

  }

else if(o==7)
  {
    cout<<"   |   |   "<<endl;
    cout<<" X | O |   "<<endl;
    cout<<"___|___|___"<<endl;
    cout<<"   |   |   "<<endl;
    cout<<"   | X |   "<<endl;
    cout<<"___|___|___"<<endl;
    cout<<"   |   |   "<<endl;
    cout<<" O |   | X "<<endl;
    cout<<"   |   |   "<<endl;
    cout<<endl;
    cout<<"Computer has put in 5\nComputer wins"<<endl;

  }

else if(o==8)
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
    cout<<"Computer has put in 5\nComputer wins"<<endl;

  }

}
