(*s: unparse_php.mli *)

(* this does not maintain comments and space but maintain the newlines *)
val string_of_program2: Parse_php.program2 -> string

(* does not maintain comments or space *)
val string_of_any: Ast_php.any -> string
val string_of_expr: Ast_php.expr -> string

val string_of_infos: Ast_php.info list -> string

(* preserve space and comments and handle the transfo annotation
 * (this function is called by spatch)
 *)
val string_of_program2_using_transfo:
  Parse_php.program2 -> string

(*e: unparse_php.mli *)
