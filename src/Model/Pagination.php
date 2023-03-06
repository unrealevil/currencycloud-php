<?php

namespace CurrencyCloud\Model;

class Pagination
{
    private ?int $totalEntries = null;
    private ?int $totalPages = null;
    private ?int $currentPage = null;
    private ?int $perPage = null;
    private ?int $previousPage = null;
    private ?int $nextPage = null;
    private ?string $order = null;
    private ?string $orderAscDesc = null;

    public static function create(?int $totalEntries, ?int $totalPages, ?int $currentPage, ?int $perPage, ?int $previousPage, ?int $nextPage, ?string $order, ?string $orderAscDesc): static
    {
        return (new self())
            ->setTotalEntries($totalEntries)
            ->setTotalPages($totalPages)
            ->setCurrentPage($currentPage)
            ->setPerPage($perPage)
            ->setPreviousPage($previousPage)
            ->setNextPage($nextPage)
            ->setOrder($order)
            ->setOrderAscDesc($orderAscDesc);
    }

    public function getTotalEntries(): ?int
    {
        return $this->totalEntries;
    }

    public function setTotalEntries(?int $totalEntries): self
    {
        $this->totalEntries = $totalEntries;

        return $this;
    }

    public function getTotalPages(): ?int
    {
        return $this->totalPages;
    }

    public function setTotalPages(?int $totalPages): self
    {
        $this->totalPages = $totalPages;

        return $this;
    }

    public function getCurrentPage(): ?int
    {
        return $this->currentPage;
    }

    public function setCurrentPage(?int $currentPage): self
    {
        $this->currentPage = $currentPage;

        return $this;
    }

    public function getPerPage(): ?int
    {
        return $this->perPage;
    }

    public function setPerPage(?int $perPage): self
    {
        $this->perPage = $perPage;

        return $this;
    }

    public function getPreviousPage(): ?int
    {
        return $this->previousPage;
    }

    public function setPreviousPage(?int $previousPage): self
    {
        $this->previousPage = $previousPage;

        return $this;
    }

    public function getNextPage(): ?int
    {
        return $this->nextPage;
    }

    public function setNextPage(?int $nextPage): self
    {
        $this->nextPage = $nextPage;

        return $this;
    }

    public function getOrder(): ?string
    {
        return $this->order;
    }

    public function setOrder(?string $order): self
    {
        $this->order = $order;

        return $this;
    }

    public function getOrderAscDesc(): ?string
    {
        return $this->orderAscDesc;
    }

    public function setOrderAscDesc(?string $orderAscDesc): self
    {
        $this->orderAscDesc = $orderAscDesc;

        return $this;
    }

    public function hasNextPage(): bool
    {
        return -1 !== $this->nextPage;
    }

    public function hasPreviousPage(): bool
    {
        return -1 !== $this->previousPage;
    }
}
