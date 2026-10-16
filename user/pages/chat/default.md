---
title: Chat
visible: true
process:
  markdown: false
---

<div class="community-chat">
    <h1>Community Chat</h1>
    <p>Join the conversation with other visitors.</p>

    <div id="chat-messages" aria-live="polite">
        <p>Loading messages...</p>
    </div>

    <form id="chat-form">
        <label for="chat-name">Your name</label>
        <input id="chat-name" name="name" type="text" maxlength="40" required>

        <label for="chat-message">Message</label>
        <input id="chat-message" name="message" type="text" maxlength="500" required>

        <button type="submit">Send message</button>
        <p id="chat-status" role="status"></p>
    </form>

</div>

<style>
.community-chat {
    max-width: 700px;
    margin: 30px auto;
}

#chat-messages {
    min-height: 200px;
    max-height: 400px;
    overflow-y: auto;
    padding: 15px;
    border: 1px solid #ccc;
    margin: 20px 0;
    overflow-wrap: anywhere;
}

.chat-message {
    padding: 10px 0;
    border-bottom: 1px solid #555;
}

.chat-message time {
    color: #aaa;
    font-size: 0.85em;
    margin-left: 8px;
}

#chat-form label {
    display: block;
    margin: 12px 0 5px;
}

#chat-form input {
    box-sizing: border-box;
    width: 100%;
    padding: 10px;
    margin-bottom: 8px;
}

#chat-form button {
    padding: 10px 18px;
    cursor: pointer;
}

#chat-status {
    min-height: 1.4em;
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const messagesContainer = document.getElementById('chat-messages');
    const form = document.getElementById('chat-form');
    const status = document.getElementById('chat-status');
    const nameInput = document.getElementById('chat-name');
    const messageInput = document.getElementById('chat-message');
    const endpoint = '/chat.php';

    function displayMessages(messages) {
        messagesContainer.replaceChildren();

        if (!messages.length) {
            messagesContainer.textContent = 'No messages yet. Start the conversation!';
            return;
        }

        messages.forEach(function (message) {
            const item = document.createElement('div');
            item.className = 'chat-message';

            const author = document.createElement('strong');
            author.textContent = message.name;

            const time = document.createElement('time');
            time.textContent = message.time || '';

            const text = document.createElement('p');
            text.textContent = message.message;

            item.append(author, time, text);
            messagesContainer.appendChild(item);
        });
    }

    async function loadMessages() {
        try {
            const response = await fetch(endpoint, { cache: 'no-store' });

            if (!response.ok) {
                throw new Error('Could not load messages.');
            }

            const messages = await response.json();

            if (!Array.isArray(messages)) {
                throw new Error('Unexpected server response.');
            }

            displayMessages(messages);
        } catch (error) {
            messagesContainer.textContent = 'Unable to load chat messages.';
        }
    }

    form.addEventListener('submit', async function (event) {
        event.preventDefault();

        const name = nameInput.value.trim();
        const message = messageInput.value.trim();

        if (!name || !message) {
            status.textContent = 'Enter your name and a message.';
            return;
        }

        const button = form.querySelector('button');
        button.disabled = true;
        status.textContent = 'Sending...';

        try {
            const response = await fetch(endpoint, {
                method: 'POST',
                body: new URLSearchParams({ name, message })
            });

            const result = await response.json();

            if (!response.ok || !result.success) {
                throw new Error(result.error || 'Message could not be sent.');
            }

            messageInput.value = '';
            status.textContent = 'Message sent.';
            await loadMessages();
        } catch (error) {
            status.textContent = error.message || 'Unable to send message.';
        } finally {
            button.disabled = false;
        }
    });

    loadMessages();
    setInterval(loadMessages, 10000);
});
</script>
