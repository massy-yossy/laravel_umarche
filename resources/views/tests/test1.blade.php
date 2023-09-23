<x-tests.app>
  <x-slot name='header'>
    ヘッダー
  </x-slot>
  test1

  <x-tests.card title="タイトル" content="コンテンツ本文" :message='$test'/>
  <x-tests.card title="タイトル２" />
  <x-tests.card title="cssを変更したい" class="bg-pink-400"/>
</x-tests.app>
