#include <iostream>

using namespace std;

#include "input_5.h"

input_5::input_5()
{
  //ctor
}

int o5;

void input_5::box_5()
{

  cout<<"   |   |   "<<endl;
  cout<<" X |   |   "<<endl;
  cout<<"___|___|___"<<endl;
  cout<<"   |   |   "<<endl;
  cout<<"   | O |   "<<endl;
  cout<<"___|___|___"<<endl;
  cout<<"   |   |   "<<endl;
  cout<<"   |   | X "<<endl;
  cout<<"   |   |   "<<endl;
  cout<<endl;
  cout<<"Computer has put in 9"<<endl;
  cout<<"Your turn"<<endl;
  cin>>o5;

if(o5==2)
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
  cin>>o5;

  if(o5==3)
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

  else if(o5==4)
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

  else if(o5==6)
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

  else if(o5==7)
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
  cout<<"Computer has put in 7"<<endl;
  cout<<"Your turn"<<endl;
  cin>>o5;

  if(o5==4)
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
  cout<<"Computer has put in 6\nComputer Wins"<<endl;

  }

  else if(o5==6)
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
  cout<<"Computer has put in 4\nThe Game ends as a draw"<<endl;

  }


  }

}


else if(o5==6)
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
  cin>>o5;

  if(o5==2)
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
  cout<<"Computer has put in 7\nCmputer wins"<<endl;

  }

  else if(o5==3)
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
  cout<<"Computer has put in 7\nCmputer wins"<<endl;

  }

  else if(o5==8)
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
  cout<<"Computer has put in 7\nCmputer wins"<<endl;

  }

  else if(o5==7)
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
  cout<<"Computer has put in 3\nYour turn"<<endl;
  cin>>o5;

    if(o5==2)
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

    else if(o5==8)
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
      cout<<"Computer has put in 2\nComputer wins"<<endl;

      }
  }

}

else if(o5==8)
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
  cout<<"Computer has put in 2"<<endl;
  cout<<"Your turn"<<endl;
  cin>>o5;

  if(o5==4)
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
  cout<<"Computer has put in 3\nComputer wins"<<endl;

  }
  else if(o5==6)
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
  cout<<"Computer has put in 3\nComputer wins"<<endl;

  }
  else if(o5==7)
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
  cout<<"Computer has put in 3\nComputer wins"<<endl;

  }
  else if(o5==3)
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
  cin>>o5;

  if(o5==6)
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
    cout<<"Computer has put in 4\nComputer wins"<<endl;
    }

  else if(o5==4)
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
    cout<<"Computer has put in 6\nThe Game ends as a Draw"<<endl;
    }

  }

}

else if(o5==3)
{

  cout<<"   |   |   "<<endl;
  cout<<" X |   | O "<<endl;
  cout<<"___|___|___"<<endl;
  cout<<"   |   |   "<<endl;
  cout<<"   | O |   "<<endl;
  cout<<"___|___|___"<<endl;
  cout<<"   |   |   "<<endl;
  cout<<" X |   | X "<<endl;
  cout<<"   |   |   "<<endl;
  cout<<endl;
  cout<<"Computer has put in 7"<<endl;
  cout<<"Your turn"<<endl;
  cin>>o5;

  if(o5==2)
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
    cout<<"Computer has put in 8\nComputer wins"<<endl;

  }

  else if(o5==4)
  {
    cout<<"   |   |   "<<endl;
    cout<<" X |   | O "<<endl;
    cout<<"___|___|___"<<endl;
    cout<<"   |   |   "<<endl;
    cout<<" O | O |   "<<endl;
    cout<<"___|___|___"<<endl;
    cout<<"   |   |   "<<endl;
    cout<<" X | X | X "<<endl;
    cout<<"   |   |   "<<endl;
    cout<<endl;
    cout<<"Computer has put in 8\nComputer wins"<<endl;

  }

  else if(o5==6)
  {
    cout<<"   |   |   "<<endl;
    cout<<" X |   | O "<<endl;
    cout<<"___|___|___"<<endl;
    cout<<"   |   |   "<<endl;
    cout<<"   | O | O "<<endl;
    cout<<"___|___|___"<<endl;
    cout<<"   |   |   "<<endl;
    cout<<" X | x | X "<<endl;
    cout<<"   |   |   "<<endl;
    cout<<endl;
    cout<<"Computer has put in 8\nComputer wins"<<endl;

  }

  else if(o5==8)
  {
    cout<<"   |   |   "<<endl;
    cout<<" X |   | O "<<endl;
    cout<<"___|___|___"<<endl;
    cout<<"   |   |   "<<endl;
    cout<<" X | O |   "<<endl;
    cout<<"___|___|___"<<endl;
    cout<<"   |   |   "<<endl;
    cout<<" X | O | X "<<endl;
    cout<<"   |   |   "<<endl;
    cout<<endl;
    cout<<"Computer has put in 4\nComputer wins"<<endl;

  }

}

else if(o5==4)
{

  cout<<"   |   |   "<<endl;
  cout<<" X |   |   "<<endl;
  cout<<"___|___|___"<<endl;
  cout<<"   |   |   "<<endl;
  cout<<" O | O | X "<<endl;
  cout<<"___|___|___"<<endl;
  cout<<"   |   |   "<<endl;
  cout<<"   |   | X "<<endl;
  cout<<"   |   |   "<<endl;
  cout<<endl;
  cout<<"Computer has put in 6"<<endl;
  cout<<"Your turn"<<endl;
  cin>>o5;

  if(o5==2)
  {
  cout<<"   |   |   "<<endl;
  cout<<" X | O | X "<<endl;
  cout<<"___|___|___"<<endl;
  cout<<"   |   |   "<<endl;
  cout<<" O | O | X "<<endl;
  cout<<"___|___|___"<<endl;
  cout<<"   |   |   "<<endl;
  cout<<"   |   | X "<<endl;
  cout<<"   |   |   "<<endl;
  cout<<endl;
  cout<<"Computer has put in 3"<<endl;
  cout<<"Computer wins"<<endl;

  }

  else if(o5==7)
  {
  cout<<"   |   |   "<<endl;
  cout<<" X |   | X "<<endl;
  cout<<"___|___|___"<<endl;
  cout<<"   |   |   "<<endl;
  cout<<" O | O | X "<<endl;
  cout<<"___|___|___"<<endl;
  cout<<"   |   |   "<<endl;
  cout<<" O |   | X "<<endl;
  cout<<"   |   |   "<<endl;
  cout<<endl;
  cout<<"Computer has put in 3"<<endl;
  cout<<"Computer wins"<<endl;

  }

  else if(o5==8)
  {
  cout<<"   |   |   "<<endl;
  cout<<" X |   | X "<<endl;
  cout<<"___|___|___"<<endl;
  cout<<"   |   |   "<<endl;
  cout<<" O | O | X "<<endl;
  cout<<"___|___|___"<<endl;
  cout<<"   |   |   "<<endl;
  cout<<"   | O | X "<<endl;
  cout<<"   |   |   "<<endl;
  cout<<endl;
  cout<<"Computer has put in 3"<<endl;
  cout<<"Computer wins"<<endl;

  }

  else if(o5==3)
  {
  cout<<"   |   |   "<<endl;
  cout<<" X |   | O "<<endl;
  cout<<"___|___|___"<<endl;
  cout<<"   |   |   "<<endl;
  cout<<" O | O | X "<<endl;
  cout<<"___|___|___"<<endl;
  cout<<"   |   |   "<<endl;
  cout<<" X |   | X "<<endl;
  cout<<"   |   |   "<<endl;
  cout<<endl;
  cout<<"Computer has put in 7"<<endl;
  cout<<"Your turn"<<endl;
  cin>>o5;

  if(o5==2)
    {
    cout<<"   |   |   "<<endl;
    cout<<" X | O | O "<<endl;
    cout<<"___|___|___"<<endl;
    cout<<"   |   |   "<<endl;
    cout<<" O | O | X "<<endl;
    cout<<"___|___|___"<<endl;
    cout<<"   |   |   "<<endl;
    cout<<" X | X | X "<<endl;
    cout<<"   |   |   "<<endl;
    cout<<endl;
    cout<<"Computer has put in 8\nComputer Wins"<<endl;

    }

  else if(o5==8)
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
    cout<<"Computer has put in 2\nThe Game ends as a draw"<<endl;

    }


  }

}

else if(o5==7)
{

  cout<<"   |   |   "<<endl;
  cout<<" X |   | X "<<endl;
  cout<<"___|___|___"<<endl;
  cout<<"   |   |   "<<endl;
  cout<<"   | O |   "<<endl;
  cout<<"___|___|___"<<endl;
  cout<<"   |   |   "<<endl;
  cout<<" O |   | X "<<endl;
  cout<<"   |   |   "<<endl;
  cout<<endl;
  cout<<"Computer has put in 3"<<endl;
  cout<<"Your turn"<<endl;
  cin>>o5;

  if(o5==2)
  {
    cout<<"   |   |   "<<endl;
    cout<<" X | O | X "<<endl;
    cout<<"___|___|___"<<endl;
    cout<<"   |   |   "<<endl;
    cout<<"   | O | X "<<endl;
    cout<<"___|___|___"<<endl;
    cout<<"   |   |   "<<endl;
    cout<<" O |   | X "<<endl;
    cout<<"   |   |   "<<endl;
    cout<<endl;
    cout<<"Computer has put in 6\nComputer wins"<<endl;

  }

  else if(o5==4)
  {
    cout<<"   |   |   "<<endl;
    cout<<" X |   | X "<<endl;
    cout<<"___|___|___"<<endl;
    cout<<"   |   |   "<<endl;
    cout<<" O | O | X "<<endl;
    cout<<"___|___|___"<<endl;
    cout<<"   |   |   "<<endl;
    cout<<" O |   | X "<<endl;
    cout<<"   |   |   "<<endl;
    cout<<endl;
    cout<<"Computer has put in 6\nComputer wins"<<endl;

  }

  else if(o5==6)
  {
    cout<<"   |   |   "<<endl;
    cout<<" X | X | X "<<endl;
    cout<<"___|___|___"<<endl;
    cout<<"   |   |   "<<endl;
    cout<<"   | O | O "<<endl;
    cout<<"___|___|___"<<endl;
    cout<<"   |   |   "<<endl;
    cout<<" O |   | X "<<endl;
    cout<<"   |   |   "<<endl;
    cout<<endl;
    cout<<"Computer has put in 2\nComputer wins"<<endl;

  }

  else if(o5==8)
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
    cout<<"Computer has put in 4\nComputer wins"<<endl;

  }

}





}
