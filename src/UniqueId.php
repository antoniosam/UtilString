<?php

namespace Ast;

class UniqueId
{

    static public function generate($clave = null, $random = null)
    {
        $r = is_null($random) ? time() : $random;
        if (is_null($clave)) {
            return Base62::codeNumber($r);
        }
        $key = Base62::codeNumber($clave);
        $unique = Base62::codeNumber($r);
        return $key . "-" . $unique;
    }
}