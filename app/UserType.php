<?php

namespace App;

enum UserType: String
{
    case Admin = 'admin';
    case SuperAdmin = 'superAdmin';
}
