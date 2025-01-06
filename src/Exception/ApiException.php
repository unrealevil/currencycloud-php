<?php

namespace CurrencyCloud\Exception;

use Exception;

class ApiException extends CurrencyCloudException
{
    private string $date;
    private string $requestId;
    private ?array $errors;
    private int $statusCode;

    public function __construct(
        int $statusCode,
        string $date,
        string $requestId,
        ?array $errors,
        ?array $parameters,
        string $httpMethod,
        string $url,
        string $message = '',
        int $code = 0,
        ?Exception $previous = null
    ) {
        parent::__construct(
            $parameters,
            $httpMethod,
            $url,
            $message,
            $code,
            $previous
        );
        $this->date = $date;
        $this->requestId = $requestId;
        $this->errors = $errors;
        $this->statusCode = $statusCode;
    }

    protected function getCompileProperties(): array
    {
        $temp = [
            'response' => [
                'status_code' => $this->statusCode,
                'date' => $this->date,
                'request_id' => $this->requestId
            ]
        ];
        if (null !== $this->errors) {
            $temp['errors'] = $this->errors;
        }
        return parent::getCompileProperties() + $temp;
    }

    public function getDate(): ?string
    {
        return $this->date;
    }

    public function getRequestId(): ?string
    {
        return $this->requestId;
    }

    public function getErrors(): ?array
    {
        return $this->errors;
    }

    public function getStatusCode(): ?int
    {
        return $this->statusCode;
    }
}
