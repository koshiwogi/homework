
-- もしhomeworkテーブルがあったら削除する
DROP TABLE IF EXISTS `homework`;

-- homeworkテーブルを作成する
CREATE TABLE `homework` (
   -- 作成するカラム カラムの書き方は後述
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nickname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `age` int(11) NOT NULL,
  `tel` int(11),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- カラムの書き方
-- `カラム名` データ型 オプション

-- カラム名
  -- 任意の名前を書く

-- データ型
  -- 該当カラムに挿入するデータの種類
  -- 種類
    -- int 数字
    -- varchar(数字) 数字以下の文字列 数字は最大で255まで
      -- varchar(255) 255文字以下の文字列
    -- text 長い文字列(短くてもOK)
    -- date 日付

-- オプション
  -- NOT NULL
    -- NULL(空を許可しない)

-- 