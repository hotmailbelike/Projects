def display_board(board):
    '''The input parameter is an array'''

    print('\n'*40)

    print('   |   |')
    print(' ' + board[7] + ' | ' + board[8] + ' | ' + board[9])
    print('   |   |')
    print('-----------')
    print('   |   |')
    print(' ' + board[4] + ' | ' + board[5] + ' | ' + board[6])
    print('   |   |')
    print('-----------')
    print('   |   |')
    print(' ' + board[1] + ' | ' + board[2] + ' | ' + board[3])
    print('   |   |')

# test_board = ['#','X','O','X','O','X','O','X','O','X']

def player_input():
    marker = ''
    while(marker != 'X' and marker != 'O'):
        marker=input('Player1: Choose X or O: ').upper()
        if(marker=='X'):
            return('X','O')
        else:
            return('O','X')

# player1_marker, player2_marker = player_input()

# print(player1_marker+' '+player2_marker)

def place_marker(board, marker, position):
    board[position] = marker

# print(place_marker(test_board,'@',4))
# print(display_board(test_board))

def win_check(board,mark):
    return ((board[7]==mark and board[8]==mark and board[9]==mark) or
    (board[4]==mark and board[5]==mark and board[6]==mark) or
    (board[1]==mark and board[2]==mark and board[3]==mark) or
    (board[7]==mark and board[4]==mark and board[1]==mark) or
    (board[8]==mark and board[5]==mark and board[2]==mark) or
    (board[9]==mark and board[6]==mark and board[3]==mark) or
    (board[7]==mark and board[5]==mark and board[3]==mark) or
    (board[9]==mark and board[5]==mark and board[1]==mark))

# display_board(test_board)
# print(win_check(test_board,'X'))

import random

def choose_first():
    flip = random.randint(0,1)
    if(flip==0):
        return 'Player 1'
    else:
        return 'Player 2'

def space_check(board, position):
    return board[position] == ' '

def full_board_check(board):
    for i in range(1,10):
        if(space_check(board, i)):
            return False  #This means board is not full

    return True

def player_choice(board):
    position = 0
    while position not in [1,2,3,4,5,6,7,8,9] or not space_check(board,position):
        position = int(input('Choose your position: (1-9) '))

    return position

def replay():
    print('Would you like to play again?')
    choice = input("Enter 'Y' or 'N': \n").upper()
    return choice == 'Y'


print('Welcome to the TIC TAC TOE Game')
print('\n')
'''Things to do:
1) Set up the board
2) Decide who goes first
3) Decide markers for the players
4) Gameplay
5) Decide Winner
6) Ask for replay'''

while(True):
    the_board = [' ']*10
    player1_marker, player2_marker = player_input()

    turn = choose_first()
    print('\n')
    print(turn+' will go first')


    print('\n')
    play_game = input('Ready to play?\nPress Y to play or N otherwise ').upper()

    if(play_game == 'Y'):
        game_on = True
    else:
        game_on = False

    while(game_on):
        if(turn == 'Player 1'):
            display_board(the_board)
            position = player_choice(the_board)
            place_marker(the_board,player1_marker,position)
            if(win_check(the_board,player1_marker)):
                display_board(the_board)
                print('\nPLayer 1 has WON!!\n')
                game_on = False
            else:
                if(full_board_check(the_board)):
                    display_board(the_board)
                    print('\nThe game is a TIE! :(\n')
                    game_on = False
                else:
                    turn = 'Player 2'

        else:
            display_board(the_board)
            position = player_choice(the_board)
            place_marker(the_board,player2_marker,position)
            if(win_check(the_board,player2_marker)):
                display_board(the_board)
                print('\nPLayer 2 has WON!!\n')
                game_on = False
            else:
                if(full_board_check(the_board)):
                    display_board(the_board)
                    print('\nThe game is a TIE! :(\n')
                    game_on = False
                else:
                    turn = 'Player 1'


    if(not replay()):
        break
