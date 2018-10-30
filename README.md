# Telegram commands
Setup telegram bot which respond to commands from user.

## Install bot

On telegram app, search @BotFather and click on it to start the conversation.

<p align="middle" ><img src="/images/bf_search.png" alt="BotFather search" width="400"></p>

On BotFather chat, type the folowing commands to create a new bot:

    /newbot

<p align="middle" ><img src="/images/bot_create.png" alt="Bot create" width="400"></p>
  
On BotFather chat, type the folowing commands to add a name that you will be able to see in the telegram app:

    your_bot_name

<p align="middle" ><img src="/images/bot_name.png" alt="Bot name" width="400"></p>
  
On BotFather chat, type the folowing commands to add an username (it must ends with the letters "bot"):
  
    your_username_bot
    
<p align="middle" ><img src="/images/bot_token.png" alt="Bot token" width="400"></p>
  
Now your bot is created and the token to use the HTTP API is available. In this case the token is (744205053:AAH9GZH1gwNQ_7XZTj_GegpnT4H_ir75fpk).

On telegram app, search @your_username_bot and click on (your_bot_name) to start the conversation.
  
<p align="middle" ><img src="/images/bot_add.png" alt="Bot add" width="400"></p>

## Create the bot response

### Add script
We are going to add the [script](/src/qtrezbemwmxwzrqunpsyipfejqjg05bw.php) to the web server. The script must be accesible from internet.

Add it to the root web directors. To protect the script from manual execution, add a long random name to it.

    ├── /
    │   ├── qtrezbemwmxwzrqunpsyipfejqjg05bw.php

### Create webhook
Basically, in Telegram there are two ways to get messages from users: long polling and webhooks. With long polling, you need to request new messages from the API, and with webhooks you are setting a callback that the Telegram API will call if a new message arrives from a user.

<p align="middle" ><img src="/images/webhook.png" alt="Weebhook"></p>

To add webhook you have to know tow thing: 
- The script url 
- Your token
        https://api.telegram.org/bot<token>/setwebhook?url=https://<host_name>/<script_name.php>   


        https://api.telegram.org/bot744205053:AAH9GZH1gwNQ_7XZTj_GegpnT4H_ir75fpk/setwebhook?url=https://exemple.com/qtrezbemwmxwzrqunpsyipfejqjg05bw.php
