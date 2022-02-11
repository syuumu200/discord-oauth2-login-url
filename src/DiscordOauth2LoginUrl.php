<?php

namespace Syuumu200;

class DiscordOauth2LoginUrl {
    static function generate(int $client_id, string $redirect_uri = null, ?string $state = null, string $response_type = 'code', array $scope = ['identify']): string {
        return 'https://discord.com/oauth2/authorize?' . http_build_query([
          'client_id' => $client_id,
          'redirect_uri' => $redirect_uri,
          'state' =>  $state ?? url()->current(),
          'response_type' => $response_type,
          'scope' => implode(" ", $scope)
        ]);
    }
}