<?php

it('has news/createnews page', function () {
    $response = $this->get('/news/createnews');

    $response->assertStatus(200);
});
