<?php


namespace App\Http;


class Response
{
    protected string $content = '';
    protected array $header = [];
    protected int $statusCode = 200;

    /**
     * Response constructor.
     * @param string $content
     * @param array $header
     * @param int $statusCode
     */
    public function __construct(string $content, array $header, int $statusCode)
    {
        $this->content = $content;
        $this->header = $header;
        $this->statusCode = $statusCode;
    }

    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * @param string $content
     */
    public function setContent(string $content): void
    {
        $this->content = $content;
    }

    /**
     * @return array
     */
    public function getHeader(): array
    {
        return $this->header;
    }

    /**
     * @param array $header
     */
    public function setHeader(array $header): void
    {
        $this->header = $header;
    }

    /**
     * @return int
     */
    public function getStatusCode(): int
    {
        return $this->statusCode;
    }

    /**
     * @param int $statusCode
     */
    public function setStatusCode(int $statusCode): void
    {
        $this->statusCode = $statusCode;
    }
}
