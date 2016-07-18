USE [cnbv]
GO
/****** Object:  Table [user_data_cat]    Script Date: 25/06/2016 05:58:46 p.m. ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [blog_data_cat](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[tipo] [varchar](50) NOT NULL,
	[des] [varchar](100) NULL,
	[deslarga] [varchar](200) NULL,
	[date_created] [datetime2](7) NOT NULL,
	[status] [smallint] NOT NULL,
 CONSTRAINT [primary key10] PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
