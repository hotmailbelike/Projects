#include <iostream>
#include <cstdlib>
#include <ctime>

using namespace std;




int main()
{


  cout<<"                            This is a game of Bingo                       "<<endl<<endl;;
  cout<<"First Player to Fill a table Horizontally or Vertically or Diagonally wins"<<endl;
  cout<<"~~~~~~~~Table can be made for you either automatically or manually~~~~~~~~"<<endl;
  cout<<"After table is made, call in a number to be omitted then the Computer will choose"<<endl;
  cout<<"Selected number from both parties' table will be removed respectively until either player's table is filled"<<endl<<endl;

  int z;
  z=0;
  srand(time(0));
  int p[5][5];
  int cpu[5][5];

  int array[20][20];
  int i,j,k,l,q,w,n,q1,w1;
  char choice, x='x';
  bool pWins = false;
  bool cpuWins = false;


  while(x!='q')
{
  q++;w++;
//  cout<<"Computer's bingo table is: "<<endl<<endl;
  cout<<"Computer has made its bingo table"<<endl<<endl;

  for(i=0;i<5;i++)
  {
    for(j=0;j<5;j++)
    {
      cpu[i][j]= 1+rand()%25;
    }
  }

//  for(i=0;i<5;i++)
//  {
//    for(j=0;j<5;j++)
//    {
//      cout<<cpu[i][j]<<" ";
//    }
//    cout<<endl;
//  }

  cout<<endl;

  cout<<"Would you like to create your own table or do you want the computer to set it up for you?"<<endl;
  cout<<"Press 'm' to set up manually or press any other key to make on automatically: "<<endl;
  cin>>choice;
  cout<<endl;

  if(choice == 'm')
  {
    cout<<"Please enter between 10 and 25 in your bingo table: "<<endl;

    for(k=0;k<5;k++)
    {
      for(l=0;l<5;l++)
      {
        cin>>p[k][l];
      }
    }

    cout<<endl;
    cout<<"Your bingo table is as follows: "<<endl;

    for(k=0;i<k;k++)
    {
      for(l=0;l<5;l++)
      {
        cout<<p[k][l]<<" ";
      }
      cout<<endl;
    }

  }

  else
  {
    cout<<"The table generated for you is: "<<endl;

    for(k=0;k<5;k++)
    {
      for(l=0;l<5;l++)
      {
        p[k][l]= 1+rand()%25;
      }
    }

    for(k=0;k<5;k++)
    {
      for(l=0;l<5;l++)
      {
        cout<<p[k][l]<<" ";
      }
      cout<<endl;
    }
  }
  q++; w++;
  while((cpuWins != true) && (pWins != true))
  {

    cout<<endl;
    cout<<"Enter the number you want to omit: "<<endl;
    cin>>n;
    cout<<endl;
    //cout<<"Your bingo table now is: "<<endl;

    for(k=0;k<5;k++)
    {
      for(l=0;l<5;l++)
      {
        if(p[k][l]==n)
        {
          p[k][l] = 0;
        }
      }
    }

//    for(k=0;k<5;k++)
//    {
//      for(l=0;l<5;l++)
//      {
//        cout<<p[k][l]<<" ";
//      }
//      cout<<endl;
//    }
//    cout<<endl;

//    cout<<"CPU's bingo table now is: "<<endl;

    for(i=0;i<5;i++)
    {
      for(j=0;j<5;j++)
      {
        if(cpu[i][j]==n)
        {
          cpu[i][j] = 0;
        }
      }
    }

//    for(i=0;i<5;i++)
//    {
//      for(j=0;j<5;j++)
//      {
//        cout<<cpu[i][j]<<" ";
//      }
//      cout<<endl;
//    }
//    cout<<endl;

    bool match = true;

    for(q=0;q<20;q++)
    {
      for(w=0;w<20;w++)
      {
        array[q][w]=(1+rand()%25);
      }

    }

//    for(q=0;q<20;q++)
//    {
//      for(w=0;w<20;w++)
//      {
//        cout<<array[q][w]<<" ";
//      }
//      cout<<endl;
//    }

    q=0;w=0;


     q1=1+rand()%10;  w1=1+rand()%10;

    n=array[q1][w1];

    cout<<"Cpu has chosen "<<n<<endl;

//    cout<<q1<<" "<<w1<<endl;
    cout<<endl;
    cout<<"Your Bingo table now is: "<<endl;

    for(k=0;k<5;k++)
    {
      for(l=0;l<5;l++)
      {
        if(p[k][l]==n)
        {
          p[k][l] = 0;
        }
      }
    }

    for(k=0;k<5;k++)
    {
      for(l=0;l<5;l++)
      {
        cout<<p[k][l]<<" ";
      }
      cout<<endl;
    }
    cout<<endl;

//    cout<<"CPU's bingo table now is: "<<endl;

    for(i=0;i<5;i++)
    {
      for(j=0;j<5;j++)
      {
        if(cpu[i][j]==n)
        {
          cpu[i][j] = 0;
        }
      }
    }

//    for(i=0;i<5;i++)
//    {
//      for(j=0;j<5;j++)
//      {
//        cout<<cpu[i][j]<<" ";
//      }
//      cout<<endl;
//    }
//    cout<<endl;

    if(p[0][0]==0 && p[0][1]==0 && p[0][2]==0 && p[0][3]==0 && p[0][4]==0)
    {
      pWins = true;
    }
    else if(p[1][0]==0 && p[1][1]==0 && p[1][2]==0 && p[1][3]==0 && p[1][4]==0)
    {
      pWins = true;
    }
    else if(p[2][0]==0 && p[2][1]==0 && p[2][2]==0 && p[2][3]==0 && p[2][4]==0)
    {
      pWins = true;
    }
    else if(p[3][0]==0 && p[3][1]==0 && p[3][2]==0 && p[3][3]==0 && p[3][4]==0)
    {
      pWins = true;
    }
    else if(p[4][0]==0 && p[4][1]==0 && p[4][2]==0 && p[4][3]==0 && p[4][4]==0)
    {
      pWins = true;
    }
    else if(p[0][0]==0 && p[1][1]==0 && p[2][2]==0 && p[3][3]==0 && p[4][4]==0)
    {
      pWins = true;
    }
    else if(p[4][0]==0 && p[3][1]==0 && p[2][2]==0 && p[1][3]==0 && p[0][4]==0)
    {
      pWins = true;
    }
    else if(p[0][0]==0 && p[1][0]==0 && p[2][0]==0 && p[3][0]==0 && p[4][0]==0)
    {
      pWins = true;
    }
    else if(p[0][1]==0 && p[1][1]==0 && p[2][1]==0 && p[3][1]==0 && p[4][1]==0)
    {
      pWins = true;
    }
    else if(p[0][2]==0 && p[1][2]==0 && p[2][2]==0 && p[3][2]==0 && p[4][2]==0)
    {
      pWins = true;
    }
    else if(p[0][3]==0 && p[1][3]==0 && p[2][3]==0 && p[3][3]==0 && p[4][3]==0)
    {
      pWins = true;
    }
    else if(p[0][4]==0 && p[1][4]==0 && p[2][4]==0 && p[3][4]==0 && p[4][4]==0)
    {
      pWins = true;
    }



    else if(cpu[0][0]==0 && cpu[0][1]==0 && cpu[0][2]==0 && cpu[0][3]==0 && cpu[0][4]==0)
    {
      cpuWins = true;
    }
    else if(cpu[1][0]==0 && cpu[1][1]==0 && cpu[1][2]==0 && cpu[1][3]==0 && cpu[1][4]==0)
    {
      cpuWins = true;
    }
    else if(cpu[2][0]==0 && cpu[2][1]==0 && cpu[2][2]==0 && cpu[2][3]==0 && cpu[2][4]==0)
    {
      cpuWins = true;
    }
    else if(cpu[3][0]==0 && cpu[3][1]==0 && cpu[3][2]==0 && cpu[3][3]==0 && cpu[3][4]==0)
    {
      cpuWins = true;
    }
    else if(cpu[4][0]==0 && cpu[4][1]==0 && cpu[4][2]==0 && cpu[4][3]==0 && cpu[4][4]==0)
    {
      cpuWins = true;
    }
    else if(cpu[0][0]==0 && cpu[1][1]==0 && cpu[2][2]==0 && cpu[3][3]==0 && cpu[4][4]==0)
    {
      cpuWins = true;
    }
    else if(cpu[4][0]==0 && cpu[3][1]==0 && cpu[2][2]==0 && cpu[1][3]==0 && cpu[0][4]==0)
    {
      cpuWins = true;
    }
    else if(cpu[0][0]==0 && cpu[1][0]==0 && cpu[2][0]==0 && cpu[3][0]==0 && cpu[4][0]==0)
    {
      cpuWins = true;
    }
    else if(cpu[0][1]==0 && cpu[1][1]==0 && cpu[2][1]==0 && cpu[3][1]==0 && cpu[4][1]==0)
    {
      cpuWins = true;
    }
    else if(cpu[0][2]==0 && cpu[1][2]==0 && cpu[2][2]==0 && cpu[3][2]==0 && cpu[4][2]==0)
    {
      cpuWins = true;
    }
    else if(cpu[0][3]==0 && cpu[1][3]==0 && cpu[2][3]==0 && cpu[3][3]==0 && cpu[4][3]==0)
    {
      cpuWins = true;
    }
    else if(cpu[0][4]==0 && cpu[1][4]==0 && cpu[2][4]==0 && cpu[3][4]==0 && cpu[4][4]==0)
    {
      cpuWins = true;
    }

  }

  cout<<endl;
  if(pWins == true)
  {
    cout<<"BINGO!"<<endl;
    cout<<"Congratulations!"<<endl;
    cout<<"You have won!"<<endl;
  }
  else if(cpuWins == true)
  {
    cout<<"CPU has won, as its bingo table is now as follows: "<<endl;

    for(i=0;i<5;i++)
    {
      for(j=0;j<5;j++)
      {
        cout<<cpu[i][j]<<" ";
      }
      cout<<endl;
    }
    cout<<endl;
  }
  cout<<endl;
  cout<<"Would you like to play again?"<<endl;
  cout<<"Press 'q' to quit or any other button to restart"<<endl;
  cin>>x;
  cpuWins = false; pWins=false;
  cout<<endl;

}

  return 0;
}
