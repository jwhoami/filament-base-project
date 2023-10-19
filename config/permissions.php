<?php

return [
  ["id" => "adm", "parent" => "#", "text" => "Administración"],
  ["id" => "app", "parent" => "#", "text" => "Aplicación"],

  ["id" => "Role", "parent" => "adm", "text" => "Roles"],
  ["id" => "Role.index", "parent" => "Role", "text" => "Listar"],
  ["id" => "Role.create", "parent" => "Role", "text" => "Agregar"],
  ["id" => "Role.view", "parent" => "Role", "text" => "Ver"],
  ["id" => "Role.update", "parent" => "Role", "text" => "Editar"],
  ["id" => "Role.delete", "parent" => "Role", "text" => "Eliminar"],
  ["id" => "Role.toggleflag-active", "parent" => "Role", "text" => "Alternar Activo"],
  ["id" => "Role.toggleflag-blocked", "parent" => "Role", "text" => "Alternar Admin"],

  ["id" => "User", "parent" => "adm", "text" => "Usuarios"],
  ["id" => "User.index", "parent" => "User", "text" => "Listar"],
  ["id" => "User.create", "parent" => "User", "text" => "Agregar"],
  ["id" => "User.view", "parent" => "User", "text" => "Ver"],
  ["id" => "User.update", "parent" => "User", "text" => "Editar"],
  ["id" => "User.delete", "parent" => "User", "text" => "Eliminar"],
  ["id" => "User.toggleflag-active", "parent" => "User", "text" => "Alternar Activo"],
  ["id" => "User.toggleflag-blocked", "parent" => "User", "text" => "Alternar Bloqueado"],
  ["id" => "User.set-password", "parent" => "User", "text" => "Fijar Contraseña"],

  ["id" => "Config", "parent" => "adm", "text" => "Configuración"],
  ["id" => "Config.index", "parent" => "Config", "text" => "Listar"],
  ["id" => "Config.view", "parent" => "Config", "text" => "Ver"],
  ["id" => "Config.update", "parent" => "Config", "text" => "Editar"],
];
