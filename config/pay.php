<?php

return [
    'alipay' => [
        'app_id'         => '2016080600178973',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAt4+xv939dzbrWj0QAlN/DbjI1vZCBJFbNzGdvE/JbFSL/fcaSP7+20/PTurhVAqTXOmbHeNswpbot1pO4mOEBOkG2uKhV64VcmZbrebV0m2VPbkW5+RKehEQP1VstnkrvM33LZn3PI838xXBwxwfJ9bjT289n9wmf9es8/j/lN8bTBiOxEnrPRY5VEu9JOd8fNTETf+lY3Sx1wHcmXCSyLAcXx2DAE5eDfs7Eze4+urtVQgpZmT0Rvo78wHQfEwSX5Bk7QVjgocxndatrgA39k1rPwceu7gWkbj58oQQkfcekvlT2gkFBRUlo/VUmksEJaniV6GplrrHA+0ud6+W4wIDAQAB',
        'private_key'    => 'MIIEpAIBAAKCAQEA09rwZ+BYuDSvfcjgDBB2YXFAxcusE14L2VXq2aWCmZzyx227lQzWQs786JhJxISidE8JjG5NmEk3A3eIXvOgQa3EDJZ83Pf7+Ktj1AfHaGCtYEkfadAmF8gv9aOdombiQXOISNY7/hZTsTFs/lasmIi5f7N//CY5E/4RcEq7S1qBQamf7653vCdVwduXODU031fBIIy4+3nmVSbor8sTqKjL9rw3K1EQzz9jxZHLySKVX8D70yYtZetndcyCWRRFQ4llHXVsOqkIXivEriKJgaft0dxhj9y/K8IuqyKOWGifIhZcJpwp1Tby3wJ+jr/3meYUXNOCZBRqb+fzy0wy+wIDAQABAoIBAQCTo7h2K7qoZM8H8b1xqudU8QAa192LgbbwNxf7pYRmWSI4KRjYvqFy3Z0S205NTcGJHKui2hvpTNyx5dN7mHzOSLKfsyBBPfCzU322fdVRwE4TE+J4cz6YxEHoBaYNT3XN9x265NHaOOUKT0+N0AloI6Bihk1jA6AzdpPglbQAxkU9D3YkGkmRTdiWcd0ebJcYBobbgmK/Xp2ht56NTfiM6DdjwNmc4GHn5s2EuLOfSdyuPnNUnceUXBdXJQr4JnFAt23Y7nFoxvNEETAydm5JNQBOE1ZCSfzM1eVpm7Pg20UDy/g8I+lgQnoqNK/lbtQ+iKQPjFUWv1J290S5JvWBAoGBAOxSoqwAWfKr8aA2gC8/qSrmeXEIfwbrEjk5lv/DWs+YfDTDXx9LKI4AxvYe2PslWpJxFUIYt8bFrYTZuJnhEYgAeLH3m7Xtwi698YB75tDjqTAz+roOGBnS70B6hjGyBuaOLNMwdjug1Z76vuJKMd+qGH8a6ORAYN5qbwGhSlr5AoGBAOV+wzlrUH9CNholA9sIUleFo58jWLmh6G7SLAvfUcki9V3e+HvXC1NzzAb9RqWMEwJNzo76JQ/BidNvZB4dbEnMxQPzPsWNBecPuTBPnLWGb1REUAedkYgd7pXD6Ka/UYAVL0kmxyZHJazJOyse8LDFcgCP5MMpSCUTLyk6ISaTAoGAZ/hfKy8oY5R0RJlVwfPPGFm3uhwTztZi+Rw2K6Yl8MlUc940nk7xs6/x2Nxvd+bSNzVbNe4sBF553cXv6ntTvDMA5sNaFStaUDgu5Okd/m76w4NK3spOniXoLsT4/yok0RBh9jQPAGLdOQl2K5aa5J0wE9Oh/LG6LIBFAEGWtfkCgYAf97VoBSvUXju9DpTn6NPXfzUYkMrmKMiAz2P1T2lMFEOLjOieD4lzWXj9LECwBMANHRt9zRhmhnYVbrnKfBy+dvimoTaIPCmrUwRf12cj3hMZ8N4ZAXjpNgoq8Hwy5gmLRugsT2uESHrWA73rNsceSJKlw2WBTfnPuElke8VsYwKBgQCJXx4tbJ2briUDmqPnLz/FIklh/pKSj40SWRbTY89ynzywQ7Rilvmw+6YbQjkCQ5/NazDQZTkdf7FHWZDH/EM5uBgHYKLQ4n03a2QvsxCt9e5YmAJtFfMkOJb6J0Ih8KCEGMi0/J7bSuPQSU18MUU5xMrMtI0xy+8BClNO2iXZ1Q==',
        'log'            => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],

    'wechat' => [
        'app_id'      => '',
        'mch_id'      => '',
        'key'         => '',
        'cert_client' => '',
        'cert_key'    => '',
        'log'         => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];