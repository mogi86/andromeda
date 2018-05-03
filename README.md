# andromeda
PHPUnit色々お試し用リポジトリ

## Requirement

- [Docker For Mac](https://www.docker.com/docker-mac)

## Setup
※「/path/to/」は`git clone`したディレクトリ

- ホストPCで実行

```
$ cd /path/to/andromeda
$ docker-compose build
$ docker-compose up -d
```

## Usage

### composer install

※「/path/to/」は`git clone`したディレクトリ

- ホストPCからゲストOSへssh

```
$ cd /path/to/andromeda
$ docker exec -it andromeda_web /bin/bash --login
```

- ゲストOSでPHPUnitをインストール

```
$ cd /var/andromeda
$ composer install
```

### PHPUnit実行

- ゲストOSでPHPUnit実行

```
$ cd /var/andromeda
$ vendor/bin/phpunit tests/
```

### ソースコード追加方法
※サンプルコードを参考に以下のように追加。

- プロダクトコードの追加
    - `src`ディレクトリ配下にプロダクトコードを追加する。
- テストコードの追加
    - `tests`ディレクトリ配下にテストコードを追加する。
