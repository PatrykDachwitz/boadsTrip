<?php

namespace App\Repository;

interface OceansRepository
{
  public function show(int $id);
  public function all();
}
