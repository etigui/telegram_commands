# Telegram commands
Setup Telegram bot which respond to commands from user (PHP). For more information [Telegram doc](https://core.telegram.org/bots/).

## Install bot

On Telegram app, search @BotFather and click on it to start the conversation.

<p align="middle" ><img src="/images/bf_search.png" alt="BotFather search" width="400"></p>

On BotFather chat, type the folowing commands to create a new bot:

    /newbot

<p align="middle" ><img src="/images/bot_create.png" alt="Bot create" width="400"></p>
  
On BotFather chat, type the folowing commands to add a name that you will be able to see in the Telegram app:

    your_bot_name

<p align="middle" ><img src="/images/bot_name.png" alt="Bot name" width="400"></p>
  
On BotFather chat, type the folowing commands to add an username (it must ends with the letters "bot"):
  
    your_username_bot
    
<p align="middle" ><img src="/images/bot_token.png" alt="Bot token" width="400"></p>
  
Now your bot is created and the token to use the HTTP API is available. In this case the token is:
    
    744205053:AAH9GZH1gwNQ_7XZTj_GegpnT4H_ir75fpk

On Telegram app, search @your_username_bot and click on (your_bot_name) to start the conversation.
  
<p align="middle" ><img src="/images/bot_add.png" alt="Bot add" width="400"></p>

## Create bot commands
On BotFather chat, type the folowing commands to set commands:

<p align="middle" ><img src="/images/bot_create_command.jpg" alt="Bot create command" width="400"></p>


On BotFather chat, type the folowing commands to create 2 commands (test and hi):

    test - send test command
    hi - send hi command

<p align="middle" ><img src="/images/bot_add_command.jpg" alt="Bot add command" width="400"></p>


Now the commande are available in the chat but they dosent work yet beacause no bot response are setted.

<p align="middle" ><img src="/images/bot_show_command.jpg" alt="Bot show command.jpg" width="400"></p>

## Create bot response

### Add script
We are going to add the [script](/src/qtrezbemwmxwzrqunpsyipfejqjg05bw.php) to the web server. The script must be accesible from internet.

Add it to the root web directors. To protect the script from manual execution, add a long random name to it.

    ├── exemple.com/
    │   ├── qtrezbemwmxwzrqunpsyipfejqjg05bw.php

### Create webhook
Basically, in Telegram there are two ways to get messages from users: long polling and webhooks. With long polling, you need to request new messages from the API, and with webhooks you are setting a callback that the Telegram API will call if a new message arrives from a user.

<p align="middle" ><img src="/images/webhook.png" alt="Weebhook"></p>

To add webhook you have to know 2 thing: 
- The script url : https://exemple.com/qtrezbemwmxwzrqunpsyipfejqjg05bw.php
- The token : 744205053:AAH9GZH1gwNQ_7XZTj_GegpnT4H_ir75fpk           

  
        https://api.telegram.org/bot<token>/setwebhook?url=<script_url>
        
Exemple:

        wget https://api.telegram.org/bot744205053:AAH9GZH1gwNQ_7XZTj_GegpnT4H_ir75fpk/setwebhook?url=https://exemple.com/qtrezbemwmxwzrqunpsyipfejqjg05bw.php


## Test

Now everything should works so, let's try the 2 commande (/test and /hi):

<p align="middle" ><img src="/images/bot_test.png" alt="Bot test" width="400"></p>

## Other Telegram API option

1. Get bot info:

        https://api.telegram.org/bot<token>/getme

2. Get last messages:

        https://api.telegram.org/bot<token>/getupdates
    
3. Send message:

        https://api.telegram.org/bot<token>/sendMessage?chat_id=<chat_id>&text=<text>
    

4. Set webhook:

        https://api.telegram.org/bot<token>/setwebhook?url=https://<host_name>/<script_name.php> 
    
5. Send any file/document less than 20Mo (PHP)   

    [Script send_doc.php](/src/send_doc.php)
    
6. Send photo less than 20Mo (PHP)   
    [Script send_photo.php](/src/send_photo.php)


## Ref

[How to use Commands with Telegram Bots](https://www.youtube.com/watch?v=ry6YGBPeuig)

[How to Start a Telegram Bot With PHP](https://code.tutsplus.com/articles/how-to-start-a-telegram-bot-with-php--cms-26329)

[Sending a message to a Telegram channel the easy way](https://medium.com/@xabaras/sending-a-message-to-a-telegram-channel-the-easy-way-eb0a0b32968)

[Python-telegram-bot](https://python-telegram-bot.org/)
